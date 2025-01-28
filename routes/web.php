<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestmentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [InvestmentController::class, 'index']);
Route::post('/calculate', [InvestmentController::class, 'calculate'])->name('calculate');
