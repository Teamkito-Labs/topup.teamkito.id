@section('title', 'Pengaturan Kategori')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Pengaturan Kategori</h3>
    <div class="row">
		<div class="col-12 col-sm-12 col-md-7 col-lg-7">
			@include('pemilik.partials.kategori.section-left.show')
		</div>
		<div class="col-12 col-sm-12 col-md-5 col-lg-5">
			@if (Request::segment(3) == 'tambah')
				@include('pemilik.partials.kategori.section-right.tambah')
			@elseif (Request::segment(3) == 'edit')
				@include('pemilik.partials.kategori.section-right.edit')
			@elseif (Request::segment(3) == 'hapus')
				@include('pemilik.partials.kategori.section-right.hapus')
			@endif
		</div>
    </div>
    @push('styles')
	<link rel="stylesheet" href="{{ url('xvito-responsive-bootstrap/css/default-assets/new/sweetalert-2.min.css') }}">
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
