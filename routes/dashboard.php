<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\dashboard\SubjectController;

Route::resource('dashboard/subjects',SubjectController::class);

Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');








?>
