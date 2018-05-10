<?php

namespace App\Http\Controllers\Course;

use App\Course;
use App\User;
use App\Student;
use App\Enrollment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index(Request $request, $course_id)
    {
        return view('course.student_list', [
            'courseId' => $course_id
        ]);
    }

    public function list(Request $request, $courseId)
    {
        $course = Course::find($courseId);

        $students = $course->getStudents();
       // $students = $course->students;
        return $students;
    }

    public function search(Request $request)
    {

        $q = $request->q;
        $courseId = $request->courseId;

        $data['results'] = User::
        where(function ($query) use ($q) {
            $query->where('full_name', 'LIKE', "%$q%")
                ->orWhere('email', 'LIKE', "%$q%");
        })
            ->with('student')
            ->whereHas('student', function ($query)  use ($courseId) {
                $query->whereDoesntHave('enrollments', function ($query) use ($courseId) {
                    $query->where('course_id', $courseId);
                });
            })
            ->get();
        return $data;
    }

    public function enroll(Request $request)
    {
        $courseId = $request->courseId;
        $userIds = $request->userIds;

        $students = Student::whereIn('user_id', $userIds)
            ->whereDoesntHave('enrollments', function ($query) use ($courseId) {
                $query->where('course_id', $courseId);
            })
            ->get();

        foreach ($students as $student) {
            $enrollment = Enrollment::create([
                'course_id' => $courseId,
                'student_id' => $student->id,
            ]);
        }
        return $students;
    }

    public function kick(Request $request)
    {
        $courseId = $request->courseId;
        $studentId = $request->studentId;

        $del = Enrollment::where('course_id', $courseId)
                            ->where('student_id', $studentId)
                            ->delete();

        return $del;
    }


}
