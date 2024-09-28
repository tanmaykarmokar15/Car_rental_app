<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin/cars', [App\Http\Controllers\Admin\CarController::class, 'index'])->name('admin.cars.index');
Route::get('/admin/cars/create', [App\Http\Controllers\Admin\CarController::class, 'create'])->name('admin.cars.create');
Route::post('/admin/cars', [App\Http\Controllers\Admin\CarController::class, 'store'])->name('admin.cars.store');
Route::get('/admin/cars/{car}', [App\Http\Controllers\Admin\CarController::class, 'show'])->name('admin.cars.show');
Route::get('/admin/cars/{car}/edit', [App\Http\Controllers\Admin\CarController::class, 'edit'])->name('admin.cars.edit');
Route::put('/admin/cars/{car}', [App\Http\Controllers\Admin\CarController::class, 'update'])->name('admin.cars.update');
Route::delete('/admin/cars/{car}', [App\Http\Controllers\Admin\CarController::class, 'destroy'])->name('admin.cars.destroy');

Route::get('/admin/rentals', [App\Http\Controllers\Admin\RentalController::class, 'index'])->name('admin.rentals.index'); 
Route::get('/admin/rentals/create', [App\Http\Controllers\Admin\RentalController::class, 'create'])->name('admin.rentals.create');
Route::post('/admin/rentals', [App\Http\Controllers\Admin\RentalController::class, 'store'])->name('admin.rentals.store'); 
Route::get('/admin/rentals/{rental}', [App\Http\Controllers\Admin\RentalController::class, 'show'])->name('admin.rentals.show'); 
Route::get('/admin/rentals/{rental}/edit', [App\Http\Controllers\Admin\RentalController::class, 'edit'])->name('admin.rentals.edit'); 
Route::put('/admin/rentals/{rental}', [App\Http\Controllers\Admin\RentalController::class, 'update'])->name('admin.rentals.update'); 
Route::delete('/admin/rentals/{rental}', [App\Http\Controllers\Admin\RentalController::class, 'destroy'])->name('admin.rentals.destroy');

Route::get('/user', [App\Http\Controllers\User\UserController::class, 'index'])->name('user.index');  
Route::get('/user/cars/{car}', [App\Http\Controllers\User\UserController::class, 'car'])->name('user.car');
Route::get('/user/cars/{car}/rental', [App\Http\Controllers\User\UserController::class, 'rental'])->name('user.rental'); 
Route::post('/user/cars/{car}/rental', [App\Http\Controllers\User\UserController::class, 'storeRental'])->name('user.rental.store'); 
Route::get('/user/rentals/{rental}/return', [App\Http\Controllers\User\UserController::class, 'returnRental'])->name('user.rental.return');