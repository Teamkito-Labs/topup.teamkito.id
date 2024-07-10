<?php

use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Nekoding\Tripay\Networks\HttpClient;
use Nekoding\Tripay\Tripay;

Route::get('/', function () { return view('welcome'); })->name('beranda');

Route::get('/free-fire', function () {
	return view('guest.proses-topup-diamond'); 
})->name('topup');
Route::get('/pembayaran', function () {
	return view('guest.proses-pembayaran-diamond'); 
})->name('pembayaran');

Route::get('/dashboard', function () { return view('pemilik/dashboard'); })->name('dashboard');

Route::prefix('produk')->group(function () {
	Route::prefix('prabayar')
	->group(function() {
		Route::get('/', [ProdukController::class, 'index_prabayar'])->name('produk.prabayar');
		Route::get('/show/{slug}', [ProdukController::class, 'show_prabayar'])->name('produk.prabayar.show');
		Route::get('/item/{slug}', [ProdukController::class, 'show_item'])->name('produk.item');
		Route::get('/tambah', function () { return view('pemilik/produk/partials/tambah'); })->name('tambah');
		Route::get('/edit', function () { return view('pemilik/produk/partials/edit'); })->name('edit');
	});
});

Route::prefix('pengaturan')->group(function () {
	Route::prefix('kategori')
	->group(function() {
		Route::get('/', [KategoriProdukController::class, 'index'])->name('kategori');
		Route::get('/tambah/{jenis}', [KategoriProdukController::class, 'create'])->name('kategori.create');
		Route::get('/edit/{jenis}/{slug}', [KategoriProdukController::class, 'edit'])->name('kategori.edit');
		Route::get('/hapus/{jenis}/{slug}', [KategoriProdukController::class, 'delete'])->name('kategori.delete');

		Route::post('/kategori/produk/store', [KategoriProdukController::class, 'produk_store'])->name('kategori.produk.store');
		Route::post('/kategori/kategori/store', [KategoriProdukController::class, 'kategori_store'])->name('kategori.kategori.store');
		Route::post('/kategori/brand/store', [KategoriProdukController::class, 'brand_store'])->name('kategori.brand.store');
		Route::post('/kategori/tipe/store', [KategoriProdukController::class, 'tipe_store'])->name('kategori.tipe.store');

		Route::post('/kategori/produk/update/{id}', [KategoriProdukController::class, 'produk_update'])->name('kategori.produk.update');
		Route::post('/kategori/kategori/update/{id}', [KategoriProdukController::class, 'kategori_update'])->name('kategori.kategori.update');
		Route::post('/kategori/brand/update/{id}', [KategoriProdukController::class, 'brand_update'])->name('kategori.brand.update');
		Route::post('/kategori/tipe/update/{id}', [KategoriProdukController::class, 'tipe_update'])->name('kategori.tipe.update');
	});

	Route::get('/dashboard', function () { return view('pemilik/dashboard'); })->name('dashboard');
    
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
