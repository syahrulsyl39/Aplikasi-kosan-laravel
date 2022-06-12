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
    return view('master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//route image
Route::middleware('auth', 'active:admin')->group(function(){

    
    Route::get('/indeximage', [ImageController::class, 'index'])->name('index-image');
    Route::get('/createimage', [ImageController::class, 'create'])->name('create-image');
    Route::post('/storeimage', [ImageController::class, 'store'])->name('store-image');
    Route::get('/editimage/{id}', [ImageController::class, 'edit'])->name('edit-image');
    Route::put('/updateimage/{id}', [ImageController::class, 'update'])->name('update-image');
    Route::delete('/deleteimage/{id}', [ImageController::class, 'delete'])->name('delete-image');
});

//route kosan
Route::middleware('auth', 'active:admin')->group(function(){
Route::get('/indexkosan', [KosanController::class, 'index'])->name('index-kosan');
Route::get('/craetekosan', [KosanController::class, 'create'])->name('create-kosan');
Route::post('/storekosan', [KosanController::class, 'store'])->name('store-kosan');
Route::get('/editkosan/{id}', [KosanController::class, 'edit'])->name('edit-kosan');
Route::put('/updatekosan/{id}', [KosanController::class, 'update'])->name('update-kosan');
Route::delete('/deletekosan/{id}', [KosanController::class, 'delete'])->name('delete-kosan');
});

//route pembeli
Route::middleware('auth', 'active:admin')->group(function(){
    Route::get('/indexpembeli', [PembeliController::class, 'index'])->name('index-pembeli');
    Route::get('/detailpembeli/{id}', [PembeliController::class, 'detail'])->name('detail-pembeli');
    Route::delete('/deletepembeli/{id}', [PembeliController::class, 'delete'])->name('delete-pembeli');
});

//route booking
Route::middleware('auth', 'active:admin')->group(function(){
    Route::get('/indexbooking', [BookingController::class, 'index'])->name('index-booking');
    Route::delete('/deletebooking/{id}', [BookingController::class, 'delete'])->name('delete-booking');
});

//route detail
Route::middleware('auth', 'active:admin')->group(function(){
    Route::get('/indexdetail', [DetailController::class, 'index'])->name('index-detail');
    Route::get('/createdetail', [DetailController::class, 'create'])->name('create-detail');
    Route::post('/storedetail', [DetailController::class, 'store'])->name('store-detail');
    Route::delete('/indexdetail/{id}', [DetailController::class, 'index'])->name('delete-detail');
});

//route user
Route::get('/indexuser', [Administrator::class, 'index'])->name('index-user');
Route::get('/edituser/{id}', [Administrator::class, 'edit'])->name('edit-user');
Route::put('/updateuser/{id}', [Administrator::class, 'update'])->name('update-user');