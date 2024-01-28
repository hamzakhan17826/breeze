<?php

use App\Http\Controllers\ContaminateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Mail\TestingEmail;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/practice', function (){
    return view('Pages.practice');
});

Route::get('send-email', function (){
    $name = 'Testing email';
    Mail::to('mohsanattraders@gmail.com')->send(new TestingEmail($name));
});

Route::get('test-email', function (){
    return view('mail.test-email');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/contaminate', [DashboardController::class, 'dashboardContaminate'])->name('dashboardContaminate');

    //contaminates
    Route::get('/contaminates', [ContaminateController::class, 'index'])->name('contaminates.index');
    Route::get('/contaminates/create', [ContaminateController::class, 'create'])->name('contaminates.create');
    Route::post('/contaminates/store', [ContaminateController::class, 'store'])->name('contaminates.store');
    //Route::get('/contaminates/{id}', [ContaminateController::class, 'show'])->name('contaminates.show');
    //Route::get('/contaminates/{id}/edit', [ContaminateController::class, 'edit'])->name('contaminates.edit');
    Route::put('/contaminates/{id}', [ContaminateController::class, 'update'])->name('contaminates.update');
    Route::delete('/contaminates/{id}', [ContaminateController::class, 'destroy'])->name('contaminates.destroy');
});

require __DIR__.'/auth.php';
