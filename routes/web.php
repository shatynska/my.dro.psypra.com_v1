<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainPageController;
use App\Http\Controllers\PhotoPageController;
use App\Http\Controllers\EducationPageController;
use App\Http\Controllers\Contacts\EmailController;
use App\Http\Controllers\Contacts\AddressController;
use App\Http\Controllers\Contacts\WebsiteController;
use App\Http\Controllers\Contacts\ContactPageController;
use App\Http\Controllers\Contacts\PhoneNumberController;
use App\Http\Controllers\Contacts\OnlineContactController;


Route::middleware('auth', 'verified')->group(function () {
    Route::get('/', [MainPageController::class, 'index'])->name('main.index');
    Route::patch('/', [MainPageController::class, 'update'])->name('main.update');

    Route::get('/photos', [PhotoPageController::class, 'index'])->name('photos.index');
    Route::post('/photos/{size}', [PhotoPageController::class, 'store'])->name('photos.store');
    Route::delete('/photos/{size}', [PhotoPageController::class, 'destroy'])->name('photos.destroy');

    Route::get('/contacts', [ContactPageController::class, 'index'])->name('contacts.index');
    Route::post('/contacts/phone_numbers', [PhoneNumberController::class, 'store'])->name('contacts.phone_numbers.store');
    Route::patch('/contacts/phone_numbers/{contact}', [PhoneNumberController::class, 'update'])->name('contacts.phone_numbers.update');
    Route::delete('/contacts/phone_numbers/{contact}', [PhoneNumberController::class, 'destroy'])->name('contacts.phone_numbers.destroy');
    Route::post('/contacts/emails', [EmailController::class, 'store'])->name('contacts.emails.store');
    Route::patch('/contacts/emails/{contact}', [EmailController::class, 'update'])->name('contacts.emails.update');
    Route::delete('/contacts/emails/{contact}', [EmailController::class, 'destroy'])->name('contacts.emails.destroy');
    Route::post('/contacts/websites', [WebsiteController::class, 'store'])->name('contacts.websites.store');
    Route::patch('/contacts/websites/{contact}', [WebsiteController::class, 'update'])->name('contacts.websites.update');
    Route::delete('/contacts/websites/{contact}', [WebsiteController::class, 'destroy'])->name('contacts.websites.destroy');
    Route::post('/contacts/addresses', [AddressController::class, 'store'])->name('contacts.addresses.store');
    Route::patch('/contacts/addresses/{contact}', [AddressController::class, 'update'])->name('contacts.addresses.update');
    Route::delete('/contacts/addresses/{contact}', [AddressController::class, 'destroy'])->name('contacts.addresses.destroy');
    Route::post('/contacts/online_contacts', [OnlineContactController::class, 'store'])->name('contacts.online_contacts.store');
    Route::patch('/contacts/online_contacts/{contact}', [OnlineContactController::class, 'update'])->name('contacts.online_contacts.update');
    Route::delete('/contacts/online_contacts/{contact}', [OnlineContactController::class, 'destroy'])->name('contacts.online_contacts.destroy');

    Route::get('/education', [EducationPageController::class, 'index'])->name('education.index');
    Route::patch('/education', [EducationPageController::class, 'update'])->name('education.update');

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
