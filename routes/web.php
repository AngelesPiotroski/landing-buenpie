<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('home');
Route::post('/contacto', [LandingController::class, 'submit'])->name('contact.submit');