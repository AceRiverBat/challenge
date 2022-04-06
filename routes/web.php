<?php

use App\Http\Controllers\articleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartController;
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

Route::get('/', [articleController::class, 'index']);

Route::get('/cart', [cartController::class, 'index'])->middleware(['auth'])->name('cart');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
