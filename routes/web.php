<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PhotosController;
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

Route::middleware('auth', 'verified')->group(
    function () {

        Route::get('/', [MainController::class, 'index'])->name('main');
        Route::patch('/', [MainController::class, 'update'])->name('main.update');

        Route::get('/photos', PhotosController::class)->name('photos');

        Route::controller(ProfileController::class)->group(function () {
            Route::get('/profile/edit', 'edit')->name('profile.edit');
            Route::patch('/profile', 'update')->name('profile.update');
            Route::delete('/profile', 'destroy')->name('profile.destroy');
        });
    }
);


require __DIR__ . '/features.php';
require __DIR__ . '/auth.php';
