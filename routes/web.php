<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing.pages');
});

Route::get('/tabungan', function () {
    return view('guru.tabungan');
});

// Siswa
Route::get('/aktivitas', function () {
    return view('siswa.aktivitas');
});
Route::get('/dashboard-siswa', function () {
    return view('siswa.dashboard');
});

// Admin
Route::get('/home-admin', function () {
    return view('admin.home');
});

Route::get('/akun-admin', function () {
    return view('admin.akun');
});
Route::get('/akunGuru-admin', function () {
    return view('admin.akunGuru');
});
Route::get('/dashboard-admin', function () {
    return view('admin.dashboard');
});
Route::get('/kelas-admin', function () {
    return view('admin.kelas');
});
Route::get('/audit-admin', function () {
    return view('admin.audit');
});
Route::get('/laporan-admin', function () {
    return view('admin.laporan');
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




