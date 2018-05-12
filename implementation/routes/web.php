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

Route::prefix('teacher')->namespace('Teacher')->name('teacher.')->group(function () {
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


    Route::name('review.')->prefix('/review')->group(function () {
        Route::get('/form/{submission_id}', 'Homework\ReviewController@getReviewForm')->name(
        'form'
        );

        Route::post('/add/{submission_id}', 'Homework\ReviewController@addReview')->name(
        'add'
        );
    });

});


Route::prefix('student')->name('student.')->group(function (){
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
});

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


