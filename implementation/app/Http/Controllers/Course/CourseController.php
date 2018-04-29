<?php

namespace App\Http\Controllers\Course;

use App\Course;
use App\Lesson;
use App\Teacher;
use App\User;
use App\Student;
use App\Enrollment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CourseController extends Controller
{
    //
    public function listCourses($user_id)
    {

        $user = User::where('id', $user_id)->first();
        $teacher = $user->teacher;
        $courses = $teacher->courses;
        return view('course.course_list', ['courses' => $courses]);
    }

    public function listLessons($course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $lessons = $course->lessons;
        $students = $course->students;
        return view('course.lesson_list', ['lessons' => $lessons,
            'course' => $course]);
    }



    public function createCourse()
    {
        return view('course.course_create');
    }

    public function storeCourse(Request $request)
    {
        $input = $request->only('course_name',
                                'max_students',
                                'max_groups',
                                'start_date',
                                'end_date');
        $course = new Course();
        $course->teacher_id = Auth::user()->teacher->id;
        $course->fill($input);
        $course->save();

        return redirect()->route('list_lessons', ['course_id' => $course->id]);
    }

    public function searchCourse(Request $request)
    {
        $search = $request->search;
        $courses = Course::where('teacher_id', Auth::user()->teacher->id)
                        ->where('course_name', 'LIKE', "%$search%")->get();

        //return $courses;

        return view('course.course_search', ['courses' => $courses]);
    }

    public function searchStudent(Request $request)
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

    public function listStudent(Request $request, $course_id)
    {
        $course = Course::where('id', $course_id)->first();
        $searchStudent = User::where('role_id', 1)->get()->pluck('email');
        $students = $course->students;

        return view('course.student_list', ['students' => $students,
                                                'searchStudent' => $searchStudent,
                                                'courseId' => $course_id
                                                ]);
    }

    public function enrollStudent(Request $request)
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


}
