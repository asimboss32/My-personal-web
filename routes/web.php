<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\dashboardController;
use App\Http\Controllers\frontendController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/',[frontendController::class,'index']);

//admin login
Route::get('/admin/login',[AdminController::class,'adminlogin']);
Auth::routes();

Route::get('/admin/dashboard',[dashboardController::class,'admindashboard']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
