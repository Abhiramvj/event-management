<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'home'])->name('home');
Route::get('/about',[DashboardController::class,'about'])->name('about');

Route::get('/services',[DashboardController::class,'services'])->name('services');
Route::get('/gallery',[DashboardController::class,'gallery'])->name('gallery');
Route::get('/blogs',[DashboardController::class,'blogs'])->name('blogs');
Route::get('/contact',[DashboardController::class,'contact'])->name('contact');
