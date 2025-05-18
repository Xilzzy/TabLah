<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing.pages');
});

Route::get('/tabungan', function () {
    return view('guru.tabungan');
});

Route::get('/aktivitas', function () {
    return view('siswa.aktivitas');
});



// login
Route::get('/login-siswa', function () {
    return view('login.login-siswa');
});

Route::get('/login-guru', function () {
    return view('login.login-guru');
});

Route::get('/login-admin', function () {
    return view('login.login-admin');
});


// Register
Route::get('/signup-guru', function () {
    return view('signup.signup-guru');
});

Route::get('/signup-siswa', function () {
    return view('signup.signup-siswa');
});

Route::get('/signup-admin', function () {
    return view('signup.signup-admin');
});







// 




