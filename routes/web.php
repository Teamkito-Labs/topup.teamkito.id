<?php

use App\Http\Controllers\OauthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Nekoding\Tripay\Networks\HttpClient;
use Nekoding\Tripay\Tripay;

Route::get('/', function () { return view('welcome'); })->name('beranda');

Route::get('/free-fire', function () {
	$tripay = new Tripay(new HttpClient(env('TRIPAY_API_KEY')));

	$data = $tripay->getChannelPembayaran();

	//dd($data);

	return view('guest.proses-topup-diamond', compact('data')); 
})->name('topup');

Route::get('/dashboard', function () { return view('pemilik/dashboard'); })->name('dashboard');

Route::prefix('pengaturan')->group(function () {
    Route::get('/kategori-produk', function () { return view('pemilik/kategori-produk'); })->name('kategori-produk');
    Route::get('/users', function () {  });
    Route::get('/settings', function () {  });
});

Route::get('oauth/google', [OauthController::class, 'redirectToProvider'])->name('oauth.google');  
Route::get('oauth/google/callback', [OauthController::class, 'handleProviderCallback'])->name('oauth.google.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
