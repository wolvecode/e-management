<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
})->name('login');



Route::group(['middleware' => ['auth']], function () {
    //only authorized users can access these routes
    Route::group(array('prefix' => 'applicant'), function () {
        Route::get('/dashboard', function () {
            return view('applicant.menu');
        });
        //USER
        Route::get('/{user}/edit', [UserController::class, 'edit']);
        Route::patch('/{user}', [UserController::class, 'patch']);
        Route::get('/application', [ApplicationController::class, 'index']);
        Route::get('/application/{application}', [ApplicationController::class, 'show']);
        Route::patch('/changepassword/{user}', [UserController::class, 'changePasswordSave']);
        Route::post('/application', [ApplicationController::class, 'store']);
    });

    Route::group(array('prefix' => 'reviewer'), function () {
        Route::get('/dashboard', function () {
            return view('reviewer.menu');
        });
        //USER
        Route::post('/comment/{id}', [CommentController::class, 'store']);
        Route::get('/{user}/edit', [UserController::class, 'edit']);
        Route::patch('/{user}', [UserController::class, 'patch']);
        Route::patch('/application/{application}', [ApplicationController::class, 'reviewerApprove']);
        Route::patch('/application/reject/{application}', [ApplicationController::class, 'reviewerReject']);
        Route::get('/application/{application}', [ApplicationController::class, 'show']);
        Route::get('/application', [ApplicationController::class, 'index']);
        Route::patch('/letter/{application}', [ApplicationController::class, 'reviewerUpload']);
        Route::patch('/changepassword/{user}', [UserController::class, 'changePasswordSave']);
    });

    Route::group(array('prefix' => 'admin'), function () {
        Route::get('/dashboard', function () {
            return view('admin.menu');
        });
        //USER
        Route::get('/{user}/edit', [UserController::class, 'edit']);
        Route::patch('/{user}', [UserController::class, 'patch']);
        Route::get('/reviewer', [UserController::class, 'reviewer']);
        Route::get('/applicant', [UserController::class, 'applicant']);
        Route::patch('/changepassword/{user}', [UserController::class, 'changePasswordSave']);
        Route::get('/application', [ApplicationController::class, 'index'])->name('filters');
        Route::get('/application/{application}', [ApplicationController::class, 'show']);
        Route::patch('/application/{application}', [ApplicationController::class, 'approve']);
        Route::patch('/application/reject/{application}', [ApplicationController::class, 'reject']);
        Route::get('/add-admin', [UserController::class, 'addAdmin']);
        Route::post('/add-admin', [UserController::class, 'addNewAdmin']);
        Route::patch('/letter/{application}', [ApplicationController::class, 'uploadApproval']);
        Route::patch('/{application}/{user_id}', [ApplicationController::class, 'assign']);
    });
    Route::post('/logout', [UserController::class, 'logout']);
});


Route::group(['middleware' => ['guest']], function () {
    //only guests can access these routes
    Route::group(array('prefix' => 'applicant'), function () {
        Route::get('/', function () {
            // dd(auth()->user());
            return view('applicant.login');
        });
        Route::post('/register', [UserController::class, 'store']);
        Route::post('/login', [UserController::class, 'login']);
    });

    Route::group(array('prefix' => 'reviewer'), function () {
        Route::get('/', function () {
            return view('reviewer.login');
        });
        Route::post('/register', [UserController::class, 'store']);
        Route::post('/login', [UserController::class, 'login']);
    });

    Route::group(array('prefix' => 'admin'), function () {
        Route::get('/', function () {
            return view('admin.login');
        });
        Route::post('/login', [UserController::class, 'login']);
    });
});

Route::patch('/storage/{application}', [ApplicationController::class, 'uploadApproval'])->name('viewLetter');


Route::get('/forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');

Route::post('/forget-password', [UserController::class, 'submitForgetPasswordForm'])->name('forget.password.post');

Route::get('/reset-password/{token}', [UserController::class, 'showResetPasswordForm'])->name('reset.password.get');

Route::post('/reset-password', [UserController::class, 'submitResetPasswordForm'])->name('reset.password.post');
