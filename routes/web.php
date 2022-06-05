<?php

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
    return view('Ecommerce.Home');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/index', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_index');
Route::get('/workshop/index', [App\Http\Controllers\WorkshopsController::class, 'index'])->name('workshop_index');
Route::get('/booking', [App\Http\Controllers\AppointmentController::class, 'index'])->name('booking_index');
