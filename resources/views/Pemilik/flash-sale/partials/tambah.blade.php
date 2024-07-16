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
            <li class="breadcrumb-item"><a href=""></a></li>
            <li class="breadcrumb-item"><a href=""></a></li>
            <li class="breadcrumb-item"><a href=""></a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
            <form action="{{ route('produk.item.store') }}" method="POST">
				@csrf
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
    @endpush
</x-app-layout>
