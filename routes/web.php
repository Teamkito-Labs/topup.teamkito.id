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
Route::get('/bayar', function () {
	return view('guest.proses-pembayaran-diamond'); 
})->name('pembayaran');

Route::get('/dashboard', function () { return view('pemilik/dashboard'); })->name('dashboard');

Route::prefix('produk')->group(function () {
	Route::get('/{produkSlug}', [ProdukController::class, 'index'])->name('produk');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}', [ProdukController::class, 'show'])->name('produk.show');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}', [ProdukController::class, 'index_brand'])->name('produk.brand');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}/tipe/{tipeSlug}', [ProdukController::class, 'show_brand'])->name('produk.brand.show');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}/item/tambah', [ProdukController::class, 'create_item'])->name('produk.item.tambah');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}/item/edit/{itemSlug}', [ProdukController::class, 'edit_item'])->name('produk.item.edit');
	Route::post('/item/tambah/simpan', [ProdukController::class, 'store_item'])->name('produk.item.store');
	Route::get('/item/update/{itemId}', [ProdukController::class, 'update_item'])->name('produk.item.update');

	Route::prefix('prabayar')
	->group(function() {
		Route::get('/edit', function () { return view('pemilik/produk/partials/edit'); })->name('edit');
	});
});

Route::get('/pembayaran', function () { return view('pemilik.pembayaran.metode'); })->name('pembayaran');
Route::get('/pembayaran/tambah', function () { return view('pemilik.pembayaran.partials.tambah'); })->name('pembayaran.tambah');

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

		Route::post('/kategori/produk/destroy/{id}', [KategoriProdukController::class, 'produk_destroy'])->name('kategori.produk.destroy');
		Route::post('/kategori/kategori/destroy/{id}', [KategoriProdukController::class, 'kategori_destroy'])->name('kategori.kategori.destroy');
		Route::post('/kategori/brand/destroy/{id}', [KategoriProdukController::class, 'brand_destroy'])->name('kategori.brand.destroy');
		Route::post('/kategori/tipe/destroy/{id}', [KategoriProdukController::class, 'tipe_destroy'])->name('kategori.tipe.destroy');
	});
		Route::get('/pengaturan/pembayaran', function () { return view('pemilik.pengaturan.pembayaran.index'); })->name('a');
		Route::get('/pengaturan/pembayaran/tambah', function () { return view('pemilik.pengaturan.pembayaran.partials.section-left.index'); })->name('pembayarans.tambah');
	});

Route::get('oauth/google', [OauthController::class, 'redirectToProvider'])->name('oauth.google');  
Route::get('oauth/google/callback', [OauthController::class, 'handleProviderCallback'])->name('oauth.google.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test', function() {
	$result = checkHargaByKode('ml_3');
	
	dd($result['product_name']);
});

require __DIR__.'/auth.php';
