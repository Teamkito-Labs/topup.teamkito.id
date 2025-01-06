<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\FlashSaleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriPembayaranController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Nekoding\Tripay\Networks\HttpClient;
use Nekoding\Tripay\Tripay;

Route::get('/', [HomeController::class, 'home'])->name('beranda');
Route::get('/perangkat/{perangkat}', [HomeController::class, 'home_perangkat'])->name('beranda.perangkat');

Route::get('/proses/{gameSlug}', [HomeController::class, 'proses_topup'])->name('proses-topup');
Route::get('/bayar', function () {
	return view('guest.proses-pembayaran-diamond'); 
})->name('pembayaran');

Route::get('/dashboard', function () { return view('pemilik.dashboard'); })->name('dashboard');

Route::prefix('produk')->group(function () {
	Route::get('/{produkSlug}', [ProdukController::class, 'index'])->name('produk');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}', [ProdukController::class, 'show'])->name('produk.show');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}', [ProdukController::class, 'index_brand'])->name('produk.brand');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}/tipe/{tipeSlug}', [ProdukController::class, 'show_brand'])->name('produk.brand.show');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}/item/tambah', [ProdukController::class, 'create_item'])->name('produk.item.tambah');
	Route::get('/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}/item/edit/{itemSlug}', [ProdukController::class, 'edit_item'])->name('produk.item.edit');
	Route::post('/item/tambah/simpan', [ProdukController::class, 'store_item'])->name('produk.item.store');
	Route::patch('/item/update/{itemId}', [ProdukController::class, 'update_item'])->name('produk.item.update');
	Route::delete('/item/delete/{itemId}', [ProdukController::class, 'delete_item'])->name('produk.item.delete');
});

Route::prefix('metode-pembayaran')
	->group(function () {
		Route::get('/', [MetodePembayaranController::class, 'index'])->name('metode-pembayaran');
		Route::get('/kategori/{kategoriPembayaranSlug}', [MetodePembayaranController::class, 'show'])->name('metode-pembayaran.show');
		Route::get('/tambah', [MetodePembayaranController::class, 'create'])->name('metode-pembayaran.create');
		Route::get('/edit/{slug}', [MetodePembayaranController::class, 'edit'])->name('metode-pembayaran.edit');
		Route::post('/store', [MetodePembayaranController::class, 'store'])->name('metode-pembayaran.store');
		Route::patch('/update/{id}', [MetodePembayaranController::class, 'update'])->name('metode-pembayaran.update');
		Route::delete('/destroy/{id}', [MetodePembayaranController::class, 'destroy'])->name('metode-pembayaran.destroy');
	});


Route::get('/pembayaran/tambah', function () { return view('pemilik.pembayaran.partials.tambah'); })->name('pembayaran.tambah');
Route::get('/transaksi', function () { return view('pemilik.transaksi.riwayat'); })->name('transaksi');

Route::prefix('flash-sale')
	->group(function() {
		Route::get('/', [FlashSaleController::class, 'index'])->name('flash-sale');
		Route::get('/produk/{produkSlug}', [FlashSaleController::class, 'show_by_produk'])->name('flash-sale.produk');
		Route::get('/produk/{produkSlug}/kategori/{kategoriSlug}', [FlashSaleController::class, 'show_by_kategori'])->name('flash-sale.kategori');
		Route::get('/produk/{produkSlug}/kategori/{kategoriSlug}/brand/{brandSlug}', [FlashSaleController::class, 'show_by_brand'])->name('flash-sale.brand');
		Route::get('/tambah', [FlashSaleController::class, 'tambah'])->name('flash-sale.tambah');
		Route::get('/edit/{id}', [FlashSaleController::class, 'edit'])->name('flash-sale.edit');
		Route::post('/simpan', [FlashSaleController::class, 'store'])->name('flash-sale.store');
		Route::patch('/update/{id}', [FlashSaleController::class, 'update'])->name('flash-sale.update');
		Route::delete('/delete/{id}', [FlashSaleController::class, 'delete'])->name('flash-sale.delete');
	});

Route::prefix('pengaturan')->group(function () {
	Route::prefix('kategori')
		->group(function() {
			Route::get('/', [KategoriProdukController::class, 'index'])->name('kategori');
			Route::get('/tambah/{jenis}', [KategoriProdukController::class, 'create'])->name('kategori.create');
			Route::get('/edit/{jenis}/{slug}', [KategoriProdukController::class, 'edit'])->name('kategori.edit');
			Route::get('/hapus/{jenis}/{slug}', [KategoriProdukController::class, 'delete'])->name('kategori.delete');

			Route::post('/produk/store', [KategoriProdukController::class, 'produk_store'])->name('kategori.produk.store');
			Route::post('/kategori/store', [KategoriProdukController::class, 'kategori_store'])->name('kategori.kategori.store');
			Route::post('/brand/store', [KategoriProdukController::class, 'brand_store'])->name('kategori.brand.store');
			Route::post('/tipe/store', [KategoriProdukController::class, 'tipe_store'])->name('kategori.tipe.store');

			Route::patch('/produk/update/{id}', [KategoriProdukController::class, 'produk_update'])->name('kategori.produk.update');
			Route::patch('/kategori/update/{id}', [KategoriProdukController::class, 'kategori_update'])->name('kategori.kategori.update');
			Route::patch('/brand/update/{id}', [KategoriProdukController::class, 'brand_update'])->name('kategori.brand.update');
			Route::patch('/tipe/update/{id}', [KategoriProdukController::class, 'tipe_update'])->name('kategori.tipe.update');

			Route::delete('/produk/destroy/{id}', [KategoriProdukController::class, 'produk_destroy'])->name('kategori.produk.destroy');
			Route::delete('/kategori/destroy/{id}', [KategoriProdukController::class, 'kategori_destroy'])->name('kategori.kategori.destroy');
			Route::delete('/brand/destroy/{id}', [KategoriProdukController::class, 'brand_destroy'])->name('kategori.brand.destroy');
			Route::delete('/tipe/destroy/{id}', [KategoriProdukController::class, 'tipe_destroy'])->name('kategori.tipe.destroy');
		});
	
	Route::prefix('pembayaran')
		->group(function () {
			Route::get('/', [KategoriPembayaranController::class, 'index'])->name('pembayaran');
			Route::get('/tambah/{jenis}', [KategoriPembayaranController::class, 'create'])->name('pembayaran.create');
			Route::get('/edit/{jenis}/{slug}', [KategoriPembayaranController::class, 'edit'])->name('pembayaran.edit');
			Route::get('/hapus/{jenis}/{slug}', [KategoriPembayaranController::class, 'delete'])->name('pembayaran.delete');

			Route::post('/penyedia/store', [KategoriPembayaranController::class, 'penyedia_pembayaran_store'])->name('pembayaran.penyedia.store');
			Route::post('/kategori/store', [KategoriPembayaranController::class, 'kategori_pembayaran_store'])->name('pembayaran.kategori.store');

			Route::patch('/penyedia/update/{id}', [KategoriPembayaranController::class, 'penyedia_pembayaran_update'])->name('pembayaran.penyedia.update');
			Route::patch('/kategori/update/{id}', [KategoriPembayaranController::class, 'kategori_pembayaran_update'])->name('pembayaran.kategori.update');

			Route::patch('/penyedia/destroy/{id}', [KategoriPembayaranController::class, 'penyedia_pembayaran_destroy'])->name('pembayaran.penyedia.destroy');
			Route::patch('/kategori/destroy/{id}', [KategoriPembayaranController::class, 'kategori_pembayaran_destroy'])->name('pembayaran.kategori.destroy');
		});
});

Route::get('oauth/google', [OauthController::class, 'redirectToProvider'])->name('oauth.google');  
Route::get('oauth/google/callback', [OauthController::class, 'handleProviderCallback'])->name('oauth.google.callback');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('api')
	->group(function() {
		Route::get('/kategori-by-produk-id/{produkId}', [APIController::class, 'getKategoriByProdukId']);
		Route::get('/brand-by-kategori-id/{kategoriId}', [APIController::class, 'getBrandByKategoriId']);
		Route::get('/item-by-brand-id/{brandId}', [APIController::class, 'getItemByBrandId']);
		Route::get('/harga-by-item-id/{itemId}', [APIController::class, 'getHargaItemByItemId']);
	});

Route::get('/test', function() {
	$result = checkHargaByKode('ml_3');
	
	dd($result['product_name']);
});

Route::get('/cache', function() {
	Artisan::call('config:clear');
});

require __DIR__.'/auth.php';
