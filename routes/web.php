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
    Route::get('/topic-registration', 'Student\TopicController@index');
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
    Route::post('/add-topic', 'Teacher\TopicController@store')->name('topic.store');
    Route::delete('/delete-topic/{id}', 'Teacher\TopicController@destroy')->name('topic.delete');
    Route::get('/research-topics', 'Teacher\ResearchController@research_topics')->name('research-topics');
    Route::post('/add-research', 'Teacher\ResearchController@store')->name('research.store');
    Route::delete('/delete-research/{id}', 'Teacher\ResearchController@destroy')->name('research.delete');
    // Students Register
    Route::get('/students-register', 'Teacher\StudentController@students_register')->name('students-register');
});
