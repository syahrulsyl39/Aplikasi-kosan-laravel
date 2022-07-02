<?php

use App\Http\Controllers\Admin\Administrator;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\KosanController;
use App\Http\Controllers\Admin\PembeliController;
use App\Models\Detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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

Route::get('/', [HomeController::class, 'home'])->name('index');

Route::get('/detail', [HomeController::class, 'detail'])->name('detail');

Route::get('/booking', [HomeController::class, 'booking'])->name('booking');

Route::get('/succes', [HomeController::class, 'succes'])->name('succes');


Auth::routes();
// Route::view('/home', 'home');
Route::get('/admin-kos', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
