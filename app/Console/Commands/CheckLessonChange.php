<?php

namespace App\Console\Commands;

use App\Models\Lesson;
use Carbon\Carbon;
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
        // Lấy tất cả bài học mới được tạo (created_at = now) và danh sách người học
        Lesson::whereDate('created_at', Carbon::now())
            ->with(['topic.course.enrollments.user'])
            ->chunk(100, function ($newLessonsAndEnrollments) {
                foreach ($newLessonsAndEnrollments as $lesson) {
                    // Lấy ra những user đăng kí khóa học
                    $enrollments = $lesson->topic->course->enrollments ?? [];
                    foreach ($enrollments as $enrollment) {
                        // Lấy thông tin người học
                        $user = $enrollment->user;

                        Mail::send(
                            'mails.courses.create_lesson',
                            ['user' => $user, 'course' => $lesson->topic?->course, 'lesson' => $lesson],
                            function ($message) use ($user) {
                                $message->to($user?->email)
                                    ->subject('Course Update Notification');
                            }
                        );
                    }
                }
            });
    }
}
