<?php


use App\Http\Controllers\Backend\BookingController as BackendBookingController;
use App\Http\Controllers\Backend\ProductController;
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
Route::post('booking', [HomeController::class, 'store'])->name('store');

Route::get('/succes', [HomeController::class, 'succes'])->name('succes');


Auth::routes();
Route::get('/admin-kos', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
Route::get('/Dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

Route::get('Boking', [BackendBookingController::class, 'show'])->name('show-booking');

Route::get('Kosan', [ProductController::class, 'show'])->name('show-kosan');
Route::post('Kosan', [ProductController::class, 'store'])->name('store-kosan');
Route::get('Kosan/create', [ProductController::class, 'create'])->name('create-kosan');
Route::get('Kosan/create/{id}', [ProductController::class, 'edit'])->name('edit-kosan');
Route::put('Kosan/create/{id}', [ProductController::class, 'update'])->name('update-kosan');
Route::delete('Kosan/create/{id}', [ProductController::class, 'destroy'])->name('destroy-kosan');
