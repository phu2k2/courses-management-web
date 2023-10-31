<?php

namespace App\Services;

use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\SurveyRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SurveyService
{
    /**
     * @var SurveyRepositoryInterface
     */
    protected $surveyRepo;

    /**
     * @var CategoryRepositoryInterface
     */
    protected $categoryRepo;

    public function __construct(
        SurveyRepositoryInterface $surveyRepo,
        CategoryRepositoryInterface $categoryRepo
    ) {
        $this->surveyRepo = $surveyRepo;
        $this->categoryRepo = $categoryRepo;
    }

    /**
     * @param Request $request
     * @return void
     */
    public function addSurvey(Request $request)
    {
        $currentTime  = Carbon::now();

        $data = [];
        $level = $request->input("level");
        $language = $request->input("languages");

        foreach ($request->input("name") as $category) {
            $data[] = [
                'user_id' => auth()->id(),
                'category_id' => $category,
                'languages' => $language,
                'level' => $level,
                'created_at' => $currentTime,
                'updated_at' => $currentTime,
            ];
        }
        $this->surveyRepo->insertMultiple($data);
    }
}
