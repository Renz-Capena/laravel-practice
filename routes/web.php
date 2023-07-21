<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/first',[firstController::class,'firstFunction'])->name('btn');
Route::post('/submit', [firstController::class,'store'])->name('form.submit');

Route::get('/view/{$id}',[firstController::class,'view']);
