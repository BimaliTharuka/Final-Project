<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\ResultController;
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


    // Courses Routes
        Route::get('courses', [CourseController::class, 'index'])->name('courses.index');
        Route::get('courses/create', [CourseController::class, 'create'])->name('courses.create');
        Route::post('courses', [CourseController::class, 'store'])->name('courses.store');
        Route::get('courses/{id}', [CourseController::class, 'show'])->name('courses.show');
        Route::get('courses/{id}/edit', [CourseController::class, 'edit'])->name('courses.edit');
        Route::put('courses/{id}', [CourseController::class, 'update'])->name('courses.update');
        Route::delete('courses/{id}', [CourseController::class, 'destroy'])->name('courses.destroy');

    // Batches Routes
        Route::get('batches', [BatchController::class, 'index'])->name('batches.index');
        Route::get('batches/create', [BatchController::class, 'create'])->name('batches.create');
        Route::post('batches', [BatchController::class, 'store'])->name('batches.store');
        Route::get('batches/{id}', [BatchController::class, 'show'])->name('batches.show');
        Route::get('batches/{id}/edit', [BatchController::class, 'edit'])->name('batches.edit');
        Route::put('batches/{id}', [BatchController::class, 'update'])->name('batches.update');
        Route::delete('batches/{id}', [BatchController::class, 'destroy'])->name('batches.destroy');

     //module routes
        Route::get('modules', [ModuleController::class, 'index'])->name('modules.index');  // List all modules
        Route::get('modules/create', [ModuleController::class, 'create'])->name('modules.create'); // Show the form to create a new module
        Route::post('modules', [ModuleController::class, 'store'])->name('modules.store'); // Store a newly created module
        Route::get('modules/{module}', [ModuleController::class, 'show'])->name('modules.show'); //view created module
        Route::get('modules/{module}/edit', [ModuleController::class, 'edit'])->name('modules.edit'); // Show the form to edit an existing module
        Route::put('modules/{module}', [ModuleController::class, 'update'])->name('modules.update'); // Update an existing module
        Route::delete('modules/{module}', [ModuleController::class, 'destroy'])->name('modules.destroy'); // Delete an existing module
});
   
    
// Lecturer Routes
Route::prefix('lecturer')->middleware(['auth', 'role:Lecturer'])->group(function () {
    Route::get('/dashboard', function () {
        return view('Lecturer.dashboard');
    })->name('lecturer.dashboard');

    Route::get('/attendence', function () {
        return view('Lecturer.attendence');
    })->name('lecturer.attendence');
    
    // Route::get('/exam_results', function () {
    //     return view('Lecturer.exam_result');
    // })->name('lecturer.exam_result');
    
    Route::get('/others', function () {
        return view('Lecturer.others');
    })->name('lecturer.others');
    
    Route::get('results', [ResultController::class, 'index'])->name('results.index');
    Route::get('results/create', [ResultController::class, 'create'])->name('results.create');
    Route::post('results', [ResultController::class, 'store'])->name('results.store');
    Route::get('results/{id}', [ResultController::class, 'show'])->name('results.show');
    Route::delete('results/{id}', [ResultController::class, 'destroy'])->name('results.destroy');

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

