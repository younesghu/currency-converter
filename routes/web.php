<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CurrencyConverterController;
use App\Models\CurrencyConverter;

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
    return view('main');
});

Route::post('/add', [CurrencyConverterController::class, 'store']);

// This Route is in charge of showing every
Route::get('/', [CurrencyConverterController::class, 'showhistory']);

// This Route is in charge of deleting a history
Route::delete('/delete/{id}', [CurrencyConverterController::class, 'destroy']);
