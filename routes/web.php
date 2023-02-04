<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PhotoPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\Contacts\PhoneNumberController;


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/', [MainPageController::class, 'index'])->name('main.index');
    Route::patch('/', [MainPageController::class, 'update'])->name('main.update');

    Route::get('/photos', [PhotoPageController::class, 'index'])->name('photos.index');
    Route::post('/photos/{size}', [PhotoPageController::class, 'store'])->name('photos.store');
    Route::delete('/photos/{size}', [PhotoPageController::class, 'destroy'])->name('photos.destroy');

    Route::get('/contacts', [ContactPageController::class, 'index'])->name('contacts.index');
    Route::post('/contacts/phone-numbers', [PhoneNumberController::class, 'store'])->name('contacts.phone-numbers.store');
    Route::patch('/contacts/phone-numbers/{contact}', [PhoneNumberController::class, 'update'])->name('contacts.phone-numbers.update');
    Route::delete('/contacts/phone-numbers/{contact}', [PhoneNumberController::class, 'destroy'])->name('contacts.phone-numbers.destroy');


    Route::get('/education', function () {
        return view('pages.education');
    })->name('education.index');
    Route::get('/queries', function () {
        return view('pages.queries');
    })->name('queries.index');
    Route::get('/method', function () {
        return view('pages.method');
    })->name('method.index');
    Route::get('/schedule', function () {
        return view('pages.schedule');
    })->name('schedule.index');
    Route::get('/about', function () {
        return view('pages.about');
    })->name('about.index');
    Route::get('/posts', function () {
        return view('pages.posts');
    })->name('posts.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
