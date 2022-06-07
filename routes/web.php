<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::view('/', 'Ecommerce.Home')->name('main_home');


Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['guest'])->group(function(){
        Route::view('/login', 'auth.login')->name('login');
        Route::view('/register', 'auth.register')->name('register');
    });

    Route::middleware(['auth'])->group(function(){
        Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
        Route::get('/workshop', [App\Http\Controllers\WorkshopController::class, 'index'])->name('workshop');
        Route::get('/booking', [App\Http\Controllers\AppointmentController::class, 'index'])->name('booking');

    });

});
