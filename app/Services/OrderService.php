<?php

namespace App\Services;

use App\Repositories\Interfaces\CartRepositoryInterface;
use App\Repositories\Interfaces\EnrollmentRepositoryInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface;
use Exception;
use Illuminate\Database\Eloquent\Model;

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

    public function __construct(OrderRepositoryInterface $orderRepo, CartRepositoryInterface $cartRepo, EnrollmentRepositoryInterface $enrollmentRepo)
    {
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
        try {
            $paymentMethod = 1;
            $status = 2;
            $cartId = [];
            $dataOrder = [];
            $dataEnroll = [];
            foreach ($carts as $item) {
                $cartId[] = $item->id;
                $courseId = $item->course->id;
                $dataOrder = [
                    'user_id' => $userId,
                    'course_id' => $courseId,
                    'price' => $item->course?->discounted_price,
                    'payment_method' => $paymentMethod,
                    'status' => $status,
                ];

                $dataEnroll = [
                    'user_id' => $userId,
                    'course_id' => $courseId,
                    'title' => $item->course?->title,
                    'brief' => $item->course?->introduction,
                ];
            }
            $this->orderRepo->createMany($dataOrder);
            $this->enrollmentRepo->createMany($dataEnroll);
            return $this->deleteCarts($cartId, $userId);
        } catch (Exception $e) {
            throw new Exception();
        }
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
