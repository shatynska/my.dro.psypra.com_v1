<?php

use Illuminate\Support\Facades\Route;
use App\Models\Specialist;
use App\Http\Controllers\SpecialistController;

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

Route::get('/', [SpecialistController::class, 'index'])->name('home');

Route::get('/specialists/{specialist}', [SpecialistController::class, 'show']);
