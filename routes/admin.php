<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\RegisteredUserController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\StudentController;
use App\Models\StudentClass;
use App\Models\Subject;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
        ->middleware('auth:admin');

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->middleware('auth:admin')
        ->name('dashboard');

    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->middleware('guest:admin')
        ->name('register');

    Route::post('/register', [RegisteredUserController::class, 'store'])
        ->middleware('guest:admin');

    Route::get('/login', [AuthenticatedSessionController::class, 'create'])
        ->middleware('guest:admin')
        ->name('login');

    Route::post('/login', [AuthenticatedSessionController::class, 'store'])
        ->middleware('guest:admin');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
        ->middleware('guest:admin')
        ->name('password.request');

    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
        ->middleware('guest:admin')
        ->name('password.email');

    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
        ->middleware('guest:admin')
        ->name('password.reset');

    Route::post('/reset-password', [NewPasswordController::class, 'store'])
        ->middleware('guest:admin')
        ->name('password.update');

    Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->middleware('auth:admin')
        ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['auth:admin', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware(['auth:admin', 'throttle:6,1'])
        ->name('verification.send');

    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->middleware('auth:admin')
        ->name('password.confirm');

    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
        ->middleware('auth:admin');

    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->middleware('auth:admin')
        ->name('logout');


    Route::resource('/teacher', TeacherController::class);
    Route::get('subject', [SubjectController::class, 'index'])->name('subject.index');
    Route::get('subject/create', [SubjectController::class, 'create'])->name('subject.create');
    Route::post('subject/store', [SubjectController::class, 'store'])->name('subject.store');
    Route::delete('subject/trash/{id}', [SubjectController::class, 'trash'])->name('subject.trash');
    Route::get('subject/edit/{id}', [SubjectController::class, 'edit'])->name('subject.edit');
    Route::put('subject/update/{id}', [SubjectController::class, 'update'])->name('subject.update');

    Route::resource('class', ClassController::class);
    Route::resource('shift', ShiftController::class);
    Route::resource('group', GroupController::class);
    Route::resource('student', StudentController::class);

    Route::resource('payment', PaymentController::class);



    //show departmental student
    Route::get('department/{id}', [StudentController::class, 'show_student'])->name('department');
    Route::get('/all/student', [StudentController::class, 'all_student'])->name('all.student');



    Route::get('/getClassGroupSection/{id}', [GroupController::class, 'getClassGroupSection'])->name('getClassGroupSection');
    Route::get('/getGroupShiftSection/{id}', [StudentController::class, 'getGroupShiftSection'])->name('getGroupShiftSection');
    


    });
