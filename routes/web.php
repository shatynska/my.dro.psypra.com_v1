<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PhotoPageController;

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

    Route::get('/photos', [PhotoPageController::class, 'edit'])->name('photos');
    Route::patch('/photos', [PhotoPageController::class, 'update'])->name('photos.update');

    Route::get('/contacts', function () {
        return view('pages.contacts');
    })->name('contacts');
    Route::get('/education', function () {
        return view('pages.education');
    })->name('education');
    Route::get('/queries', function () {
        return view('pages.queries');
    })->name('queries');
    Route::get('/method', function () {
        return view('pages.method');
    })->name('method');
    Route::get('/schedule', function () {
        return view('pages.schedule');
    })->name('schedule');
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about');
    Route::get('/posts', function () {
        return view('pages.posts');
    })->name('posts');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
