<?php

Route::get('/', function () {
    if (Auth::check()) {
        if (Auth::user()->can_go_dashboard()) {
            return redirect('/dashboard');
        } else {
            return redirect('/home');
        }
    }
    return view('welcome');
});

// Authentication
Route::auth();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/register', function () {
    return redirect('/');
});

// Dashboard Management
Route::group(['middleware' => ['auth', 'dashboard']], function() {
    Route::get('/dashboard', function () {
        return view('dashboard.home');
    });
});

//Student Section
Route::group(['middleware' => ['auth', 'student']], function() {
    Route::get('/home', function () {
        return view('student.home');
    });
    Route::get('/teachers-info', 'Student\TeacherController@index');
    Route::post('/teacher-student/{id}', 'Student\TeacherController@store')->name('teacher-student');
    Route::get('/register-status', 'Student\RegisterController@index');
    Route::put('/reject-teacher/{id}', 'Student\RegisterController@destroy')->name('reject-teacher');
    Route::put('/approve-teacher/{id}', 'Student\RegisterController@approve')->name('approve-teacher');
    Route::get('/my-topic', 'Student\TopicController@show');
    Route::put('/topic-register/{id}', 'Student\TopicController@register_topic')->name('register-topic');
});

//Teacher Section
Route::group(['middleware' => ['auth', 'teacher']], function() {
    Route::get('/teacher-info', 'Teacher\TeacherController@show')->name('teacher-info');
    Route::get('/student-topics', 'Teacher\TopicController@student_topics')->name('student-topics');
    Route::get('/pending-topics', 'Teacher\TopicController@pending_topics')->name('pending-topics');
    Route::put('/approve-topic/{id}', 'Teacher\TopicController@approve')->name('approve-topic');
    Route::put('/reject-topic/{id}', 'Teacher\TopicController@reject')->name('reject-topic');
    Route::delete('/delete-topic/{id}', 'Teacher\TopicController@destroy')->name('topic.delete');
    Route::get('/research-topics', 'Teacher\ResearchController@research_topics')->name('research-topics');
    Route::post('/add-research', 'Teacher\ResearchController@store')->name('research.store');
    Route::delete('/delete-research/{id}', 'Teacher\ResearchController@destroy')->name('research.delete');
    // Students Register
    Route::get('/students-register', 'Teacher\StudentController@students_register')->name('students-register');
    Route::put('/approve-student/{id}', 'Teacher\StudentController@approve')->name('approve-student');
    Route::delete('/reject-student/{id}', 'Teacher\StudentController@reject')->name('reject-student');

    // Student Topic
    Route::get('/add-topic-{student_id}', 'Teacher\StudentTopicController@create')->name('topic.create');;
    Route::post('/add-topic/{student_id}', 'Teacher\StudentTopicController@store')->name('topic.store');
});

//Admin Section
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/departments', 'Admin\DepartmentController@index');
    Route::post('/departments', 'Admin\DepartmentController@store')->name('department.store');
    Route::delete('/departments/{id}', 'Admin\DepartmentController@destroy')->name('department.delete');
    Route::get('/departments-{id}', 'Admin\DepartmentController@show')->name('department.show');
    Route::delete('/teachers/{id}', 'Admin\TeacherController@destroy')->name('teacher.delete');
    Route::get('/teachers', 'Admin\TeacherController@index');
    Route::get('/students', 'Admin\StudentController@index');
    Route::delete('/students/{id}', 'Admin\StudentController@destroy')->name('student.delete');
    Route::get('/councils', 'Admin\CouncilController@index');
    Route::post('/councils', 'Admin\CouncilController@store')->name('council.store');
    Route::get('/students-defense', 'Admin\DefenseController@index');
    Route::get('/add-council-student-{student_id}', 'Admin\DefenseController@get_add_council_student')->name('get_add_council_student');;
    Route::put('/add-council-student/{student_id}', 'Admin\DefenseController@add_council_student')->name('add_council_student');
});
