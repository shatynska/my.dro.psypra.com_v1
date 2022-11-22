<?php

use Illuminate\Support\Facades\Route;
use App\Models\Specialist;

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

Route::get('/', function () {
    return view('specialists', [
        'heading' => 'Specialists', 
        'specialists' => Specialist::all(),
    ]);
});

Route::get('/specialists/{specialist}', function (Specialist $specialist) {
    return view('specialist', [
        'specialist' => $specialist
    ]);
});