<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MidtransCallbackController;
use App\Livewire\Pricing;
use App\Models\Plan;
use App\Services\MidtransService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('home');

Route::middleware(['auth', 'subscribed', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('profile', 'profile')
        ->name('profile');
    
    Route::get('/pricing', Pricing::class)
        ->middleware(['subscriber'])
        ->name('pricing');
});

Route::get('/terms/{lang?}', [\App\Http\Controllers\TermsController::class, 'show'])->name('terms');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

    Route::get('/plans', \App\Livewire\Admin\Plans\Index::class)->name('plans.index');
    Route::get('/subscribers', \App\Livewire\Admin\Subscribers\Index::class)->name('subscribers.index');

});

Route::post('/midtrans/callback', [MidtransCallbackController::class, 'handle'])->name('midtrans.callback');

require __DIR__.'/auth.php';
