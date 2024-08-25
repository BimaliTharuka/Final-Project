<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('register',[UserController::class, 'register'])->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('login',[UserController::class, 'login'])->name('userLogin');

////////////// 
// Admin Routes
Route::prefix('admin')->middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('Admin.dashboard');
    })->name('admin.dashboard');

    Route::get('/user_management', function () {
        return view('Admin.usermanagement');
    })->name('user_management');
    
    Route::get('/exam_management', function () {
        return view('Admin.exam_management');
    })->name('exam_management');
    
    Route::get('/result_management', function () {
        return view('Admin.result_management');
    })->name('result_management');
    
});


// Lecturer Routes
Route::prefix('lecturer')->middleware(['auth', 'role:Lecturer'])->group(function () {
    Route::get('/dashboard', function () {
        return view('Lecturer.dashboard');
    })->name('lecturer.dashboard');

    Route::get('/attendence', function () {
        return view('Lecturer.attendence');
    })->name('lecturer.attendence');
    
    Route::get('/exam_results', function () {
        return view('Lecturer.exam_result');
    })->name('lecturer.exam_result');
    
    Route::get('/others', function () {
        return view('Lecturer.others');
    })->name('lecturer.others');
    
    
});

// Student Routes
Route::prefix('student')->middleware(['auth', 'role:Student'])->group(function () {
    Route::get('/dashboard', function () {
        return view('Student.dashboard');
    })->name('student.dashboard');
    
    Route::get('/timetable', function () {
        return view('Student.timetable');
    })->name('student.timetable');
    
    Route::get('/results', function () {
        return view('Student.results');
    })->name('student.results');
    
    Route::get('/exam-request', function () {
        return view('Student.exam-request');
    })->name('student.exam-request');
});

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

