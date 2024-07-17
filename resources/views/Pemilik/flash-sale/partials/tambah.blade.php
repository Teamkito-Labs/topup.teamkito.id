@section('title', 'Flash Sale')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Flash Sale</h3>
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('flash-sale') }}">Flash Sale</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
            <form action="{{ route('flash-sale.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="produk_id" class="col-form-label">Produk</label>
                        <select id="produk_id" class="form-control @error('produk_id') is-invalid @enderror" name="produk_id" required>
                            <option value="" hidden>-- Pilih Produk --</option>
							@forelse ($produk as $item)
								<option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
							@empty
								
							@endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kategori_id" class="col-form-label">Kategori</label>
                        <select id="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" required disabled>
                            <option value="" hidden>-- Pilih Kategori --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="brand_id" class="col-form-label">Brand</label>
                        <select id="brand_id" class="form-control @error('brand_id') is-invalid @enderror" name="brand_id" required disabled>
                            <option value="" hidden>-- Pilih Brand --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="item_id" class="col-form-label">Item</label>
                        <select id="item_id" class="form-control @error('item_id') is-invalid @enderror" name="item_id" required disabled>
                            <option value="" hidden>-- Pilih Item --</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="harga" class="col-form-label">Harga</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Rp</span>
							</div>
							<input type="text" class="form-control @error('harga') is-invalid @enderror" aria-label="Profit" min="0" id="harga" name="harga" value="-" required disabled>
						</div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="diskon" class="col-form-label">Diskon</label>
						<div class="input-group">
							<input type="number" class="form-control @error('diskon') is-invalid @enderror" aria-label="Profit" min="0" id="diskon" name="diskon" placeholder="Diskon" value="" required max="100" disabled>
							<div class="input-group-prepend">
								<span class="input-group-text">%</span>
							</div>
						</div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="potongan" class="col-form-label">Potongan</label>
                        <input type="text" class="form-control @error('potongan') is-invalid @enderror" id="potongan" placeholder="" name="potongan" value="" required readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kuota" class="col-form-label">Kuota</label>
                        <input type="number" class="form-control @error('kuota') is-invalid @enderror" id="kuota" placeholder="Metode Pembayaran" name="kuota" value="{{ old('kuota') }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="batas_waktu" class="col-form-label">Batas Waktu</label>
                        <input type="number" class="form-control @error('batas_waktu') is-invalid @enderror" id="batas_waktu" placeholder="Batas Waktu" name="batas_waktu" value="{{ old('batas_waktu') }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="thumbnail" class="col-form-label">Thumbnail</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('thumbnail') is-invalid @enderror" id="thumbnail" aria-describedby="thumbnail" name="thumbnail">
                                <label class="custom-file-label" for="thumbnail">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="aktif" class="col-form-label">Status</label>
                        <select id="aktif" class="form-control @error('aktif') is-invalid @enderror" name="aktif" required>
                            <option value="" hidden>-- Pilih Status --</option>
							<option value="Y" @if(old('aktif') == 'Y') selected @endif>Aktif</option>
							<option value="N" @if(old('aktif') == 'N') selected @endif>Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-rounded btn-block btn-primary mt-2">Simpan</button>
            </form>
		</div>
	</div>      
    @push('styles')
	<link rel="stylesheet" href="{{ url('xvito-responsive-bootstrap/css/default-assets/new/sweetalert-2.min.css') }}">
	<style>
		.overflow-posisi-x {
			display: flex;
			overflow-x: auto;
			white-space: nowrap;
		}
	</style>
    @endpush
    @push('scripts')
	<script src="{{ url('xvito-responsive-bootstrap/js/default-assets/sweetalert2.min.js') }}"></script>
	@if(session()->has('info'))
    <script>
        Swal.fire({
			title: 'Perhatian!',
			text: '{{ session()->get("info") }}',
			type: 'info',
			showConfirmButton: false, // Hide the confirm button
			showCancelButton: false, // Hide the confirm button
			timer: 2000, // Close automatically after 1500ms (1,5 seconds)
			allowOutsideClick: false,
		});
    </script>
    @endif
	<script>
	$(document).ready(function() {
		$('#produk_id').change(function() {
			var produkId = $(this).val();
			if (produkId) {
				$.ajax({
					url: '/api/kategori-by-produk-id/' + produkId,
					type: 'GET',
					dataType: 'json',
					success: function(data) {
						$('#kategori_id').empty();
						$('#kategori_id').append('<option value="" hidden>-- Pilih Kategori --</option>'); // Reset options
						$.each(data, function(key, value) {
							$('#kategori_id').append('<option value="' + value.id + '">' + value.nama_kategori + '</option>');
						});
						$('#kategori_id').prop('disabled', false); // Enable the select
					},
					error: function(xhr, status, error) {
						console.error('Error fetching data:', error);
						// Optionally handle errors
					}
				});
			} else {
				$('#kategori_id').empty();
				$('#kategori_id').append('<option value="" hidden>-- Pilih Kategori --</option>');
				$('#kategori_id').prop('disabled', true); // Disable the select if no product is selected
			}
		});

		$('#kategori_id').change(function() {
			var kategoriId = $(this).val();
			if (kategoriId) {
				$.ajax({
					url: '/api/brand-by-kategori-id/' + kategoriId,
					type: 'GET',
					dataType: 'json',
					success: function(data) {
						$('#brand_id').empty();
						$('#brand_id').append('<option value="" hidden>-- Pilih Brand --</option>'); // Reset options
						$.each(data, function(key, value) {
							$('#brand_id').append('<option value="' + value.id + '">' + value.nama_brand + '</option>');
						});
						$('#brand_id').prop('disabled', false); // Enable the select
					},
					error: function(xhr, status, error) {
						console.error('Error fetching data:', error);
						// Optionally handle errors
					}
				});
			} else {
				$('#brand_id').empty();
				$('#brand_id').append('<option value="" hidden>-- Pilih Brand --</option>');
				$('#brand_id').prop('disabled', true); // Disable the select if no product is selected
			}
		});

		$('#brand_id').change(function() {
			var brandId = $(this).val();
			if (brandId) {
				$.ajax({
					url: '/api/item-by-brand-id/' + brandId,
					type: 'GET',
					dataType: 'json',
					success: function(data) {
						$('#item_id').empty();
						$('#item_id').append('<option value="" hidden>-- Pilih Item --</option>'); // Reset options
						$.each(data, function(key, value) {
							$('#item_id').append('<option value="' + value.id + '">' + value.nama_item + '</option>');
						});
						$('#item_id').prop('disabled', false); // Enable the select
					},
					error: function(xhr, status, error) {
						console.error('Error fetching data:', error);
						// Optionally handle errors
					}
				});
			} else {
				$('#item_id').empty();
				$('#item_id').append('<option value="" hidden>-- Pilih Item --</option>');
				$('#item_id').prop('disabled', true); // Disable the select if no product is selected
			}
		});

		$('#item_id').change(function() {
			var itemId = $(this).val();
			if (itemId) {
				$.ajax({
					url: '/api/harga-by-item-id/' + itemId,
					type: 'GET',
					dataType: 'json',
					success: function(data) {
						// Assuming the data returned has a field 'harga'
						if (data) {
							$('#harga').val(data);
							$('#diskon').prop('disabled', false);
						} else {
							$('#harga').val('');
						}
					},
					error: function(xhr, status, error) {
						console.error('Error fetching data:', error);
						// Optionally handle errors
					}
				});
			} else {
				$('#harga').val('');
			}
		});

		$('#diskon').on('input', function() {
			var harga = parseFloat($('#harga').val());
			var diskon = parseFloat($(this).val());
			
			if (!isNaN(harga) && !isNaN(diskon)) {
				var potongan = harga -  (harga * diskon / 100).toFixed(0); // Calculate the discount amount
				$('#potongan').val(potongan);
			} else {
				$('#potongan').val('');
			}
		});

		$('#diskon').on('keydown', function(e) {
			var currentVal = $(this).val();
			var key = e.key;
			
			// Allow backspace, delete, arrow keys, and numeric digits
			if (e.key === 'Backspace' || e.key === 'Delete' || e.key === 'ArrowLeft' || e.key === 'ArrowRight' ||
				(key >= '0' && key <= '9')) {
				// Check if adding this key will exceed 100
				var newVal = currentVal + key;
				if (parseInt(newVal) > 100) {
					e.preventDefault();
				}
			} else {
				e.preventDefault();
			}
		});
	});
	</script>
    @endpush
</x-app-layout>
