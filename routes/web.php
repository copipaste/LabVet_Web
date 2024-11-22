<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

//TODO: ESTO HE COMENTADO PARA QUE NO ME PIDA AUTENTICACIÓN
// Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//TODO: ESTA ES UNA NUEVA FORMA DE HACERLO
Route::controller(HomeController::class)->group(function() {
    Route::get('/home', 'index')->name('home.index');
});