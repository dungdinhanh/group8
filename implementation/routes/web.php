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
    return view('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/profile', 'CRUD\CRUDController@showProfile')->name('profile');

Route::get('/user/edit', 'CRUD\CRUDController@showEditForm')->name('edit_profile');

Route::post('/user/edit', 'CRUD\CRUDController@edit')->name('edit_profile_handle');

Route::get('/user/course_list/{user_id}', 'Course\CourseController@listCourses')->name(
    'list_course_teacher'
);

Route::get('/user/teacher/courses/{course_id}', 'Course\CourseController@listLessons')->name(
    'list_lessons'
);
Route::prefix('teacher')->group(function () {
    Route::get('/course/create', 'Course\CourseController@createCourse')->name(
        'create_course'
    );
    Route::post('/course/store', 'Course\CourseController@storeCourse')->name(
        'store_course'
    );
    Route::post('/course/search', 'Course\CourseController@searchCourse')->name(
        'search_course'
    );
});

Route::get('/user/homework/{course_id}/{lesson_id}', 'Homework\HomeworkController@showCreateHomeworkForm')->name(
    'show_create_homework'
);

Route::post('/user/homework/create', 'Homework\HomeworkController@createHomework')->name(
    'create_homework'
);

Route::get('/user/view_homework/{homework_id}', 'Homework\HomeworkController@showHomework')->name(
    'view_homework'
);

