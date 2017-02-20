<?php

Route::get('/', function () {
    return view('welcome');
});

// Authentication
Route::auth();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/register', function () {
    return redirect('/');
});

// Dashboard Management
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', function () {
        return view('dashboard.home');
    });
});
