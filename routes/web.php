<?php

use App\Http\Controllers\PenchilboxController;
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

Route::get('/', [PenchilboxController::class, 'money_exchange_box']);
Route::post('/exchange', [PenchilboxController::class, 'money_exchange'])->name('money.exchange');
