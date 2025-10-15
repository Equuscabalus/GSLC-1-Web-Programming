<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', [ProfileController::class, 'home'])->name('home');
Route::get('/about', [ProfileController::class, 'about'])->name('about');
Route::get('/education', [ProfileController::class, 'education'])->name('education');
Route::get('/skills', [ProfileController::class, 'skills'])->name('skills');