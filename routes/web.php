<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('reviewer.login');
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('applicant.menu');
});

Route::get('/login', function () {
    return view('admin.menu');
});

Route::get('/applicant', function () {
    return view('admin.applicant-list');
});

Route::get('/reviewer', function () {
    return view('admin.reviewer-list');
});

Route::get('/application', function () {
    return view('applicant.application');
});
