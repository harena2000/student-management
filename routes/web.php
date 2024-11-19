<?php

use App\Http\Controllers\ClassesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Student/Dashboard', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', ProfileController::class,)->name('profile');
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');
    Route::get('/classes', [ClassesController::class, 'index'])->name('classes');
});

require __DIR__ . '/auth.php';
