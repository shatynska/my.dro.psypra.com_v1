<?php

use App\Http\Controllers\MainPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/', [MainPageController::class, 'edit'])->name('main');
    Route::patch('/', [MainPageController::class, 'update'])->name('main.update');
    Route::get('/photos', function () {
        return view('photos');
    })->name('photos');
    Route::get('/contacts', function () {
        return view('contacts');
    })->name('contacts');
    Route::get('/education', function () {
        return view('education');
    })->name('education');
    Route::get('/queries', function () {
        return view('queries');
    })->name('queries');
    Route::get('/method', function () {
        return view('method');
    })->name('method');
    Route::get('/schedule', function () {
        return view('schedule');
    })->name('schedule');
    Route::get('/about', function () {
        return view('about');
    })->name('about');
    Route::get('/posts', function () {
        return view('posts');
    })->name('posts');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
