<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [ClientController::class, 'index']);
Route::get('index.html', [ClientController::class, 'home']);
Route::get('about.html', [ClientController::class, 'about']);
Route::get('service.html', [ClientController::class, 'service']);
Route::get('gallery.html', [ClientController::class, 'gallery']);
Route::get('team.html', [ClientController::class, 'team']);
Route::get('appointment.html', [ClientController::class, 'appointment']);
Route::get('blog.html', [ClientController::class, 'blog']);
Route::get('contact.html', [ClientController::class, 'contact']);
Route::get('signup.html', [ClientController::class, 'sign']);
Route::get('login.html', [ClientController::class, 'login']);
Route::get('try.html', [ClientController::class, 'try']);

Auth::routes();

Route::get('/home', [HomeController::class, 'redirect']);
