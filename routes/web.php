<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    Route::get('/sss', [DepositController::class, 'index'])->name('dashboard.index');
    Route::resource('/dashboard', DepositController::class);


    Route::get('/', [DepositController::class, 'index'])->name('deposit.index');
    Route::post('/deposit/list', [DepositController::class, 'getAllDeposits'])->name('deposit.list');
    Route::post('/deposit/approve/{id}', [DepositController::class, 'approveDeposits'])->name('deposit.approve');

    Route::resource('deposit', DepositController::class);

});




