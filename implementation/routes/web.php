<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});


Auth::routes();

//crud

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/profile', 'CRUD\CRUDController@showProfile')->name('profile');

Route::get('/user/edit', 'CRUD\CRUDController@showEditForm')->name('edit_profile');

Route::post('/user/edit', 'CRUD\CRUDController@edit')->name('edit_profile_handle');


//course

//Route::get('/user/course_list/{user_id}', 'Course\CourseController@listCourses')->name(
//    'list_course_teacher'
//);
//
//Route::get('/user/teacher/courses/{course_id}', 'Course\CourseController@listLessons')->name(
//    'list_lessons'
//);
Route::prefix('teacher')->name('teacher.')->group(function () {
    // course
    Route::name('course.')->group(function () {
        Route::get('/course', 'Course\CourseController@listCourses')->name(
            'list'
        );
        Route::get('/course/create', 'Course\CourseController@createCourse')->name(
            'create_form'
        );
        Route::post('/course/store', 'Course\CourseController@storeCourse')->name(
            'store'
        );
        Route::post('/course/search', 'Course\CourseController@searchCourse')->name(
            'search'
        );
    });

    //lesson
    Route::name('lesson.')->group(function () {
        Route::get('/course/{course_id}', 'Course\LessonController@index')->name(
            'list'
        );
        Route::get('/course/{course_id}/lesson/create', 'Course\LessonController@create')->name(
            'create'
        );
        Route::post('/course/lesson/', 'Course\LessonController@store')->name(
            'store'
        );
    });

    // student
    Route::name('student.')->group(function () {
        //show view
        Route::get('/course/{course_id}/student', 'Course\StudentController@index')->name(
            'index'
        );
        //api
        Route::get('/course/student/enroll', 'Course\StudentController@enroll')->name(
            'enroll'
        );
        //api
        Route::get('/course/{course_id}/student/list', 'Course\StudentController@list')->name(
            'list'
        );
        //api
        Route::get('/course/student/search', 'Course\StudentController@search')->name(
            'search'
        );
        // api
        Route::get('/course/student/kick', 'Course\StudentController@kick')->name(
            'kick'
        );
    });
});


//homework
Route::get('/user/homework/{course_id}/{lesson_id}', 'Homework\HomeworkController@showCreateHomeworkForm')->name(
    'show_create_homework'
);

Route::post('/user/homework/create', 'Homework\HomeworkController@createHomework')->name(
    'create_homework'
);

Route::get('/user/view_homework/{homework_id}', 'Homework\HomeworkController@showHomework')->name(
    'view_homework'
);


//submission
Route::get('/submission/{homework_id}', 'Homework\SubmissionController@showSubmissionForm')->name(
    'submission_form'
);

Route::post('/submit', 'Homework\SubmissionController@addSubmission')->name(
    'submit_homework'
);

Route::get('/view_submission/{submission_id}', 'Homework\SubmissionController@getViewSubmission')->name(
    'view_submission'
);


//review
Route::get('/review_form/{submission_id}', 'Homework\ReviewController@getReviewForm')->name(
    'review_form'
);

Route::post('/add_review/{submission_id}', 'Homework\ReviewController@addReview')->name(
    'add_review'
);


//Notification
Route::get('/r_notification/{receiver_id}', 'Notification\NotificationController@listReceivedNotification')->name(
    'list_received_notification'
);

Route::get('/s_notification/{sender_id}', 'Notification\NotificationController@listSentNotification')->name(
    'list_sent_notification'
);

Route::post('/notification/{user_id}/{notification_id}', 'Notification\NotificationController@readNotification')->name(
    'view_detail_notification'
);


