<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

    // Route::get('/user_management', function () {
    //     return view('Admin.usermanagement');
    // })->name('user_management');
    
    Route::get('/exam_management', function () {
        return view('Admin.exam_management');
    })->name('exam_management');
    
    Route::get('/result_management', function () {
        return view('Admin.result_management');
    })->name('result_management');

    // Route::resource('users', AdminController::class);
    
    Route::get('/user_management', [AdminController::class, 'getUsers'])->name('user_management');
    
    Route::post('/user_store', [AdminController::class, 'store'])->name('user_store');
    
    // Route::post('/users/{id}/edit', [AdminController::class, 'update'])->name('user_management');

    Route::post('update-user/{id}',[AdminController::class, 'update'])->name('user_update');
    
    Route::delete('delete-user/{id}',[AdminController::class, 'destroy'])->name('user_delete');


    Route::get('/user_create', function () {
        return view('Admin.user_create');
    })->name('user_create');


    // Route::get('/user_edit', function () {
    //     return view('Admin.user_edit');
    // })->name('user_edit');

    // Route::get('/user_edit', [AdminController::class, 'edit'])->name('user_edit');

    Route::get('/users/{id}/show', [AdminController::class, 'show'])->name('user_show');

    Route::get('/users/{id}/edit', [AdminController::class, 'edit'])->name('user_edit');
 


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

