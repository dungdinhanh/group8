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

Route::get('/test', 'BBBController@index');


Auth::routes();

//crud
Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/user/profile', 'CRUD\CRUDController@showProfile')->name('profile');

    Route::get('/user/edit', 'CRUD\CRUDController@showEditForm')->name('edit_profile');

    Route::post('/user/edit', 'CRUD\CRUDController@edit')->name('edit_profile_handle');

    //Notification
    Route::get('/notification/', 'Notification\NotificationController@index')->name(
        'list_notification'
    );
    Route::get('/notification/read/{notification_id}', 'Notification\NotificationController@read')->name(
        'read_notification'
    );
});

Route::prefix('teacher')->middleware('teacher')->namespace('Teacher')->name('teacher.')->group(function () {
    // course
    Route::name('course.')->prefix('/course')->group(function () {
        Route::get('/', 'Course\CourseController@listCourses')->name(
            'list'
        );
        Route::get('/create', 'Course\CourseController@createCourse')->name(
            'create_form'
        );
        Route::post('/store', 'Course\CourseController@storeCourse')->name(
            'store'
        );
        Route::post('/search', 'Course\CourseController@searchCourse')->name(
            'search'
        );
    });

    //lesson
    Route::name('lesson.')->prefix('/course')->group(function () {
        Route::get('/{course_id}', 'Course\LessonController@index')->name(
            'list'
        );
        Route::get('/{course_id}/lesson/create', 'Course\LessonController@create')->name(
            'create'
        );
        Route::post('/lesson/', 'Course\LessonController@store')->name(
            'store'
        );
    });

    //meeting
    Route::name('meeting.')->prefix('/course')->group(function () {
        Route::post('/meeting/{lesson_id}', 'MeetingController@store')->name(
            'store'
        );
        Route::get('/meeting/{meeting_id}', 'MeetingController@join')->name(
            'join'
        );
        Route::get('/meeting/end/{meeting_id}', 'MeetingController@end')->name(
            'end'
        );
    });

    // student

    Route::name('student.')->prefix('/course')->group(function () {
        //show view
        Route::get('/{course_id}/student', 'Course\StudentController@index')->name(
            'index'
        );
        //api
        Route::get('/student/enroll', 'Course\StudentController@enroll')->name(
            'enroll'
        );
        //api
        Route::get('/{course_id}/student/list', 'Course\StudentController@list')->name(
            'list'
        );
        //api
        Route::get('/student/search', 'Course\StudentController@search')->name(
            'search'
        );
        // api
        Route::get('/student/kick', 'Course\StudentController@kick')->name(
            'kick'
        );
    });

    //homework
    Route::name('homework.')->prefix('/homework')->group(function () {
        Route::get('/create/{course_id}/{lesson_id}', 'Homework\HomeworkController@showCreateHomeworkForm')->name(
            'create_form'
        );

        Route::post('/add/create', 'Homework\HomeworkController@createHomework')->name(
            'create'
        );

        Route::get('/view/{homework_id}', 'Homework\HomeworkController@showHomework')->name(
            'view'
        );
    });


    Route::name('submission.')->prefix('/submission')->group(function () {
        //show view
        Route::get('/list/{homework_id}', 'Homework\ReviewController@getListSubmission')->name(
            'list'
        );
    });

    Route::name('review.')->prefix('/review')->group(function () {
        Route::get('/form/{submission_id}', 'Homework\ReviewController@getReviewForm')->name(
        'form'
        );

        Route::post('/add/{submission_id}', 'Homework\ReviewController@addReview')->name(
        'add'
        );
    });

});


Route::prefix('student')->namespace('Student')->name('student.')->group(function (){

    Route::name('course.')->prefix('/course')->group(function () {
        Route::get('/', 'Course\CourseController@listCourses')->name(
            'list'
        );
        Route::post('/search', 'Course\CourseController@searchCourse')->name(
            'search'
        );
    });

    //lesson
    Route::name('lesson.')->prefix('/course')->group(function () {
        Route::get('/{course_id}', 'Course\LessonController@index')->name(
            'list'
        );
    });

    Route::name('homework.')->prefix('/homework')->group(function () {
        Route::get('/view/{homework_id}', 'Homework\HomeworkController@showHomework')->name(
            'view'
        );
    });

    //submission
    Route::name('submission.')->prefix('/submission')->group(function () {
        //show view
        Route::get('/form/{homework_id}', 'Homework\SubmissionController@showSubmissionForm')->name(
            'form'
        );

        Route::post('/submit', 'Homework\SubmissionController@addSubmission')->name(
            'submit'
        );

        Route::get('/view/{submission_id}', 'Homework\SubmissionController@getViewSubmission')->name(
            'view'
        );
    });

    //meeting
    Route::name('meeting.')->prefix('/course')->group(function () {
        Route::get('/meeting/{meeting_id}', 'MeetingController@join')->name(
            'join'
        );
    });
});
