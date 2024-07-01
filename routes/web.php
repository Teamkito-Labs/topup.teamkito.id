<?php

use App\Http\Controllers\OauthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('beranda');

Route::get('/free-fire', function () { return view('guest.proses-topup-diamond'); })->name('topup');

Route::get('/admin', function () { return view('layouts/app'); })->name('admin');

Route::get('oauth/google', [OauthController::class, 'redirectToProvider'])->name('oauth.google');  
Route::get('oauth/google/callback', [OauthController::class, 'handleProviderCallback'])->name('oauth.google.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
