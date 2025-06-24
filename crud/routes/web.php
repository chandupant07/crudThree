<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/student', StudentsController::class);
Route::resource('/course', CourseController::class);