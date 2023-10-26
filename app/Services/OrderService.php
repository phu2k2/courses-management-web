<?php

namespace App\Services;

use App\Repositories\Interfaces\CartRepositoryInterface;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Exception;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderService
{
    /**
     * @var OrderRepositoryInterface
     */
    protected $orderRepo;

    /**
     * @var CartRepositoryInterface
     */
    protected $cartRepo;

    /**
     * @var EnrollmentRepositoryInterface
     */
    protected $enrollmentRepo;

    public function __construct(
        OrderRepositoryInterface $orderRepo,
        CartRepositoryInterface $cartRepo,
        EnrollmentRepositoryInterface $enrollmentRepo
    ) {
        $this->orderRepo = $orderRepo;
        $this->cartRepo = $cartRepo;
        $this->enrollmentRepo = $enrollmentRepo;
    }

    /**
     * @param int $userId
     * @param array $carts
     * @throws Exception
     * @return bool
     */
    public function buyCourses($userId, $carts)
    {
        $currentTime  = Carbon::now();
        DB::beginTransaction();

        $paymentMethod = 1;
        $status = 2;
        $cartId = [];
        $dataOrder = [];
        $dataEnroll = [];
        try {
            foreach ($carts as $item) {
                $cartId[] = $item->id;
                $courseId = $item->course->id;
                $dataOrder = [
                    'user_id' => $userId,
                    'course_id' => $courseId,
                    'price' => $item->course?->discounted_price,
                    'payment_method' => $paymentMethod,
                    'status' => $status,
                    'created_at' => $currentTime,
                    'updated_at' => $currentTime,
                ];

                $dataEnroll = [
                    'user_id' => $userId,
                    'course_id' => $courseId,
                    'title' => $item->course?->title,
                    'brief' => $item->course?->introduction,
                    'created_at' => $currentTime,
                    'updated_at' => $currentTime,
                ];
            }
            $this->orderRepo->insertMultiple($dataOrder);
            $this->enrollmentRepo->insertMultiple($dataEnroll);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw new Exception();
        }

        return $this->deleteCarts($cartId, $userId);
    }

    /**
     * @param array $carts
     * @param int $userId
     * @return bool
     */
    public function deleteCarts($carts, $userId)
    {
        return $this->cartRepo->deleteMultiple($carts, $userId);
    }
}
