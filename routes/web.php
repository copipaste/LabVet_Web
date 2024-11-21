<?php

use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ServiceController;
use App\Models\Service;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// -----------------------------RUTAS PAGOS----------------------------------------

Route::resource('/payment', PaymentController::class)->names('payment')->middleware('auth');


// -----------------------------RUTAS SERVICIOS----------------------------------------

Route::resource('/service', ServiceController::class)->names('service')->middleware('auth');

 


