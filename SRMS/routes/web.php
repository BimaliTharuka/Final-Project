<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResitRequestController;
use App\Http\Controllers\AdmissionRequestController;

// use App\Http\Controllers\StudentController;


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

    // Route::get('/admission_requests', function () {
    //     return view('Admin.admission_requests');
    // })->name('admission.index');
    
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

   // Exam routes
        Route::get('exams', [ExamController::class, 'index'])->name('exams.index');
        Route::get('exams/create', [ExamController::class, 'create'])->name('exams.create');
        Route::post('exams', [ExamController::class, 'store'])->name('exams.store');
        Route::get('exams/{id}/edit', [ExamController::class, 'edit'])->name('exams.edit');
        // Route::put('exams/{id}', [ExamController::class, 'edit'])->name('exams.edit');
        Route::put('exams/{id}', [ExamController::class, 'update'])->name('exams.update');
        Route::get('exams/{id}', [ExamController::class, 'view'])->name('exams.view');
        Route::delete('exams/{id}', [ExamController::class, 'destroy'])->name('exams.destroy');

    // Admission request routes
        Route::get('admission-requests', [AdmissionRequestController::class, 'index'])->name('admission.index');
        Route::get('admission-requests/{id}/edit', [AdmissionRequestController::class, 'edit'])->name('admission.edit');
        Route::get('admission-requests/{id}', [AdmissionRequestController::class, 'view'])->name('admission.view');
        Route::post('admission-requests/{id}/DeclineAdmissionRequest', [AdmissionRequestController::class, 'DeclineAdmissionRequest'])->name('admission.DeclineAdmissionRequest');
        Route::post('admission-requests/{id}/AcceptAdmissionRequest', [AdmissionRequestController::class, 'AcceptAdmissionRequest'])->name('admission.AcceptAdmissionRequest');
        //Route::get('admission-requests/create', [AdmissionRequestController::class, 'create'])->name('admission.create');
        Route::post('admission-requests/{id}/update-status', [AdmissionRequestController::class, 'updateStatus'])->name('admission.update-status');
        Route::delete('admission-requests/{id}', [AdmissionRequestController::class, 'destroy'])->name('admission-requests.destroy');

    // Resit request routes
        Route::get('resit-requests', [ResitRequestController::class, 'index'])->name('resit.index');
        Route::get('resit-requests/{id}', [ResitRequestController::class, 'view'])->name('resit.view');
        Route::post('resit-requests/{id}/DeclineResitRequest', [ResitRequestController::class, 'DeclineResitRequest'])->name('resit.DeclineResitRequest');
        Route::post('resit-requests/{id}/AcceptResitRequest', [ResitRequestController::class, 'AcceptResitRequest'])->name('resit.AcceptResitRequest');
        Route::post('resit-requests/{id}/update-status', [ResitRequestController::class, 'updateStatus'])->name('resit.update-status');
        Route::delete('resit-requests/{id}', [ResitRequestController::class, 'destroy'])->name('resit-requests.destroy');

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

    //exam request
    //write the route get for admission request form, show the send request table

    Route::get('/admission_request', function () {
        return view('Student.admission_requestform');
    })->name('student.admission-request');
    Route::post('admission-requests', [AdmissionRequestController::class, 'store'])->name('admission-requests.store');

    //resit exam request
    //write the route get for admission request form, show the send request table
    Route::get('/resit_request', function () {
        return view('Student.resit_requestform');
    })->name('student.resit_requestform');
    Route::post('resit-requests', [ResitRequestController::class, 'store'])->name('resit-requests.store');


});

Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Route::post('/get-student-marks', [StudentController::class, 'getStudentMarks'])->name('getStudentMarks');

