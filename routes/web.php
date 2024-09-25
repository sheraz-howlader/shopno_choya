<?php

use App\Http\Controllers\AdjustmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepositController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Livewire\AnalysisManager;
use App\Livewire\DepositManager;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth:sanctum', 'verified', 'is_active']], function () {
    Route::get('/dashboard', function () {
        return redirect()->route('home');
    });
    Route::get('/', [DashboardController::class, 'index'])->name('home');
    //    Route::get('analysis', [DashboardController::class, 'analysis'])->name('analysis');

    //    Route::post('/deposit/list', [DepositController::class, 'getAllDeposits'])->name('deposit.list');
    //    Route::post('/deposit/approve/{id}', [DepositController::class, 'approveDeposits'])->name('deposit.approve');
    //    Route::resource('deposit', DepositController::class)->except('create', 'show');

    Route::get('deposit', DepositManager::class);
    Route::get('analysis', AnalysisManager::class);

    Route::resource('adjustment', AdjustmentController::class)->except('create', 'show');
    Route::get('update/profile', [UserController::class, 'updateProfile'])->name('update.profile');
    Route::post('user/accept/{id}', [UserController::class, 'acceptUser'])->name('user.accept');
    Route::resource('users', UserController::class)->except('show', 'store', 'create');
    Route::resource('roles', RoleController::class)->except('show');
});

Route::get('inactive', [DashboardController::class, 'inactive'])->name('inactive.message');
