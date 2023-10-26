<?php

namespace App\Console\Commands;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Lesson;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CheckUpdateLesson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-update-lesson';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email for user talking the course if lesson is addded';

    /**
     * Execute the console command.
     * @return void
     */
    public function handle()
    {
        //Get lessons have create today and array id lesson
        $lessons = Lesson::whereDate('created_at', now()->toDateString())->get();
        $lessonIds = $lessons->pluck('id')->toArray();

        //Get course have lesson and array id course
        $coursesWithNewLessons = Course::select('id', 'title')
            ->with('topics.lessons')->whereHas('topics.lessons', function ($query) use ($lessonIds) {
                $query->whereIn('id', $lessonIds);
            })->get();
        $coursesId = $coursesWithNewLessons->pluck('id')->toArray();

        //get user and enrollment have course_id
        $usersEnrollment = Enrollment::with('user:id,username,email')->whereIn('course_id', $coursesId)
            ->orderBy('course_id')->get();

        //send email for user have enrollment course
        foreach ($usersEnrollment as $enrollment) {
            $user = $enrollment->user;
            $course = $coursesWithNewLessons->where('id', $enrollment->course_id)->first();
            $topicIds = $course?->topics->pluck('id')->toArray();

            $lesson = $lessons->whereIn('topic_id', $topicIds ?? [])->first();

            Mail::send('mails.courses.create_lesson', ['user' => $user, 'course' => $course, 'lesson' => $lesson], function ($message) use ($user) {
                $message->to($user?->email)
                    ->subject('Course Update Notification');
            });
        }
    }
}
