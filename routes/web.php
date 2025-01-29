<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestmentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [InvestmentController::class, 'index']);
Route::post('/fd-calculator', [InvestmentController::class, 'fdCalculator'])->name('fdCalculator');
