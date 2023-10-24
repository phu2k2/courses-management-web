<?php

namespace App\Http\Middleware;

use App\Models\Enrollment;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCourseOwnership
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $courseId = $request->route('courseId');
        $enrollment = Enrollment::where('course_id', $courseId)
            ->where('user_id', auth()->id())
            ->first();

        if (!$enrollment) {
            return redirect()->route('courses.show', ['course' => $courseId]);
        }

        return $next($request);
    }
}
