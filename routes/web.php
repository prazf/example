<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/',[WelcomeController::Class,'welcome'] )->name('welcome');
