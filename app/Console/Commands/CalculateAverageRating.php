<?php

namespace App\Console\Commands;

use App\Models\Course;
use Illuminate\Console\Command;

class CalculateAverageRating extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:calculate-average-rating';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     * @return void
     */
    public function handle(): void
    {
        $coursesToUpdate = Course::with('reviews')->whereHas('reviews', function ($query) {
            $query->whereNotNull('rating');
        })->get();

        foreach ($coursesToUpdate as $course) {
            $course->update(['average_rating' => $course->reviews->avg('rating')]);
        }
    }
}
