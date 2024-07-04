<?php

use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Nekoding\Tripay\Networks\HttpClient;
use Nekoding\Tripay\Tripay;

Route::get('/', function () { return view('welcome'); })->name('beranda');

Route::get('/free-fire', function () {
	$tripay = new Tripay(new HttpClient(env('TRIPAY_API_KEY')));

	$data = $tripay->getChannelPembayaran();

	return view('guest.proses-topup-diamond', compact('data')); 
})->name('topup');
Route::get('/pembayaran', function () {
	return view('guest.proses-pembayaran-diamond'); 
})->name('pembayaran');

Route::get('/dashboard', function () { return view('pemilik/dashboard'); })->name('dashboard');

Route::prefix('pengaturan')->group(function () {
	Route::prefix('kategori')
	->group(function() {
		Route::get('/', [KategoriProdukController::class, 'index'])->name('kategori');

		Route::post('/kategori/produk/store', [KategoriProdukController::class, 'produk_store'])->name('kategori.produk.store');
		Route::post('/kategori/kategori/store', [KategoriProdukController::class, 'kategori_store'])->name('kategori.kategori.store');
		Route::post('/kategori/brand/store', [KategoriProdukController::class, 'brand_store'])->name('kategori.brand.store');
		Route::post('/kategori/tipe/store', [KategoriProdukController::class, 'tipe_store'])->name('kategori.tipe.store');
	});
    
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
