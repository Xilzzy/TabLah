<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

Route::get('/', function () {
    return view('guru.home');
});

Route::get('/tabungan', function () {
    return view('guru.tabungan');
});


Route::get('/landing', function () {
    return view('landing.pages');
});

Route::get('/login-siswa', function () {
    return view('login.login-siswa');
});

Route::get('/login-guru', function () {
    return view('login.login-guru');
});

Route::get('/login-admin', function () {
    return view('login.login-admin');
});

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

Route::get('/guru/home', [GuruController::class, 'index'])->name('guru.home');


