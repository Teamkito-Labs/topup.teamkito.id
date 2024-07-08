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
            <li class="breadcrumb-item"><a href="{{ route("prabayar") }}">Produk</a></li>
            <li class="breadcrumb-item"><a href="{{ route("prabayar") }}">Games</a></li>
            <li class="breadcrumb-item"><a href="{{ route("item") }}">Mobile Legends</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4" class="col-form-label">Produk</label>
                        <input type="text" class="form-control" id="inputEmail4" value="Pascabayar" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4" class="col-form-label">Kategori</label>
                        <input type="text" class="form-control" id="inputPassword4" value="Games" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4" class="col-form-label">Brand</label>
                        <input type="text" class="form-control" id="inputPassword4" value="Mobile Legends" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputState" class="col-form-label">Tipe</label>
                    <select id="inputState" class="form-control">
                        <option>Pilih</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4" class="col-form-label">Kode</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan harga modal Anda">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4" class="col-form-label">Nama</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Masukkan profit Anda">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4" class="col-form-label">Harga Modal</label>
                        <input type="text" class="form-control" id="inputEmail4" placeholder="Masukkan harga modal Anda">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4" class="col-form-label">Profit</label>
                        <input type="text" class="form-control" id="inputPassword4" placeholder="Masukkan profit Anda">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4" class="col-form-label">Harga Jual</label>
                        <input type="text" class="form-control" id="inputPassword4" value="Rp" disabled>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <div class="form-group">
                            <div class="checkbox d-inline">
                                <input type="checkbox" name="checkbox-1" id="checkbox-13">
                                <label for="checkbox-13" class="cr">Apakah status item masih aktif?</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button type="submit" class="btn btn-rounded btn-block btn-primary">Simpan</button>
                    </div>
                </div>
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
	@if(session()->has('success'))
		<script>
			Swal.fire({
				title: 'Sukses!',
				text: '{{ session()->get("success") }}',
				type: 'success',
				showConfirmButton: false, // Hide the confirm button
				showCancelButton: false, // Hide the confirm button
				timer: 1500, // Close automatically after 1500ms (1,5 seconds)
				allowOutsideClick: false,
			});
		</script>
	@endif
    @endpush
</x-app-layout>
