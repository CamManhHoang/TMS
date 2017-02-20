<?php

Route::get('/', function () {
    return view('welcome');
});
// Authentication
Route::auth();
Route::get('/register', function () {
    return redirect('/');
});

// Dashboard Management
Route::get('/home', function () {
    return view('dashboard.home');
});