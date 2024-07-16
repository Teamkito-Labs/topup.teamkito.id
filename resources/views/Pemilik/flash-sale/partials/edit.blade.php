@section('title', 'Prabayar')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Prabayar</h3>
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('produk', ['produkSlug' => $produk->slug]) }}">{{ $produk->nama_produk }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('produk.show', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug]) }}">{{ $kategori->nama_kategori }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('produk.brand', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug]) }}">{{ $brand->nama_brand }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
            <form id="edit-item-form" action="{{ route('produk.item.update', ['itemId' => $data->id]) }}" method="POST">
                @csrf
				@method('PATCH')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="aktif" class="col-form-label">Produk</label>
                        <select id="aktif" class="form-control" name="aktif" required>
                            <option value="" hidden>-- Pilih tipe --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="aktif" class="col-form-label">Kategori</label>
                        <select id="aktif" class="form-control" name="aktif" required>
                            <option value="" hidden>-- Pilih tipe --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="aktif" class="col-form-label">Brand</label>
                        <select id="aktif" class="form-control" name="aktif" required>
                            <option value="" hidden>-- Pilih tipe --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="aktif" class="col-form-label">Item</label>
                        <select id="aktif" class="form-control" name="aktif" required>
                            <option value="" hidden>-- Pilih tipe --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="profit" class="col-form-label">Harga</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Rp</span>
							</div>
							<input type="number" class="form-control" aria-label="Profit" min="0" id="profit" name="profit" placeholder="Rp" value="" required disabled>
						</div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="profit" class="col-form-label">Diskon</label>
						<div class="input-group">
							<input type="number" class="form-control" aria-label="Profit" min="0" id="profit" name="profit" placeholder="Profit" value="" required>
							<div class="input-group-prepend">
								<span class="input-group-text">%</span>
							</div>
						</div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="nama_metode" class="col-form-label">Potongan</label>
                        <input type="text" class="form-control" id="nama_metode" placeholder="Rp" name="nama_metode" value="" required disabled>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama_metode" class="col-form-label">Kuota</label>
                        <input type="text" class="form-control" id="nama_metode" placeholder="Metode Pembayaran" name="nama_metode" value="" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama_metode" class="col-form-label">Batas Waktu</label>
                        <input type="number" class="form-control" id="nama_metode" placeholder="Metode Pembayaran" name="nama_metode" value="" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="logo" class="col-form-label">Thumbnail</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo" aria-describedby="logo" name="logo">
                                <label class="custom-file-label" for="logo">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="aktif" class="col-form-label">Status</label>
                        <select id="aktif" class="form-control" name="aktif" required>
                            <option value="" hidden>-- Pilih tipe --</option>
							<option value="Y" @if(old('aktif') == 'Y') selected @endif>Aktif</option>
							<option value="N" @if(old('aktif') == 'N') selected @endif>Tidak Aktif</option>
                        </select>
                    </div>
                </div>
				<input type="hidden" name="produk_id" value="{{ $produk->id }}">
				<input type="hidden" name="kategori_id" value="{{ $kategori->id }}">
				<input type="hidden" name="brand_id" value="{{ $brand->id }}">
				<input type="hidden" name="produk_slug" value="{{ $produk->slug }}">
				<input type="hidden" name="kategori_slug" value="{{ $kategori->slug }}">
				<input type="hidden" name="brand_slug" value="{{ $brand->slug }}">
                <div class="row">
                    <div class="col-md-6">
						<a href="{{ route('produk.brand', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug]) }}" class="btn btn-rounded btn-block btn-secondary mt-">Batal</a>
                    </div>
                    <div class="col-md-6">
						<button type="submit" class="btn btn-rounded btn-block btn-primary mt-2">Kirim</button>
                    </div>
                </div>
            </form>
		</div>
	</div>      
    @push('styles')
	<style>
		.overflow-posisi-x {
			display: flex;
			overflow-x: auto;
			white-space: nowrap;
		}
		.is-invalid {
            border-color: #dc3545;
        }
	</style>
    @endpush
    @push('scripts')
	<script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('edit-item-form');
            const inputs = form.querySelectorAll('input[required], select[required]');
            
            function validateInput(input) {
                if (input.value.trim() === '') {
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            }

            inputs.forEach(input => {
                validateInput(input); // Validate on page load
                input.addEventListener('input', () => validateInput(input));
            });

            form.addEventListener('submit', function(event) {
                let isValid = true;
                inputs.forEach(input => {
                    validateInput(input);
                    if (input.classList.contains('is-invalid')) {
                        isValid = false;
                    }
                });
                if (!isValid) {
                    event.preventDefault();
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
