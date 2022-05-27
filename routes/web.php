<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PageController;



Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    


});
    route::get('/redirect',[HomeController::class,'redirect']);

    
    Route::get('tchat', function () {
        return view('teacher.chat');
    });
    Route::get('tclassroom', function () {
        return view('teacher.classroom');
    });
    Route::get('tmeet', function () {
        return view('teacher.meet');
    });
    Route::get('tboard', function () {
        return view('teacher.board');
    });
    Route::get('thome', function () {
        return view('teacher.home');
    });
    

    
    Route::get('schat', function () {
        return view('student.chat');
    });
    Route::get('sclassroom', function () {
        return view('student.classroom');
    });
    Route::get('smeet', function () {
        return view('student.meet');
    });
    Route::get('sboard', function () {
        return view('student.board');
    });
    Route::get('shome', function () {
        return view('student.home');
    });
    

Route::get('/',[PageController::class,'index']);

Route::get('/uploadpage',[PageController::class,'uploadpage']);

Route::post('/uploadproduct',[PageController::class,'store']);

Route::get('/uploadpage',[PageController::class,'uploadpage']);

Route::get('/show',[PageController::class,'show']);

Route::get('/download/{file}',[PageController::class,'download']);

Route::get('/view/{is}',[PageController::class,'view']);