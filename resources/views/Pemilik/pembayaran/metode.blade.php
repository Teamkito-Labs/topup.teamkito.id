@section('title', 'Pembayaran')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Pembayaran</h3>
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
        </ol>
    </nav>
	<div class="overflow-posisi-x mb-1">
		{{-- <a href="{{ route('produk', ['produkSlug' => $produk->slug]) }}" class="btn @if(Request::segment(4) == '') btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">Semua</a> --}}
		{{-- @foreach ($kategori as $item)
			<a href="{{ route('produk.show', ['produkSlug' => $produk->slug, 'kategoriSlug' => $item->slug]) }}" class="btn @if(Request::segment(4) == $item->slug) btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">{{ $item->nama_kategori }}</a>
		@endforeach --}}
		<a href="#" class="btn btn-outline-secondary btn-rounded btn-sm mb-3 mr-1 disabled text-muted">Virtual Accounts</a>
		<a href="#" class="btn btn-outline-secondary btn-rounded btn-sm mb-3 mr-1 disabled text-muted">Kartu Kredit</a>
		<a href="#" class="btn btn-outline-secondary btn-rounded btn-sm mb-3 mr-1 disabled text-muted">Ritel</a>
		<a href="#" class="btn btn-outline-secondary btn-rounded btn-sm mb-3 mr-1 disabled text-muted">E-wallet</a>
		<a href="#" class="btn btn-outline-secondary btn-rounded btn-sm mb-3 mr-1 disabled text-muted">QR Codes</a>
		<a href="#" class="btn btn-outline-secondary btn-rounded btn-sm mb-3 mr-1 disabled text-muted">Direct Debit</a>
		<a href="#" class="btn btn-outline-secondary btn-rounded btn-sm mb-3 mr-1 disabled text-muted">PayLater</a>
	</div>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-borderless">
					<thead class="bg-light">
						<tr>
							<th>#</th>
							<th><i class="ti-crown align-middle"></i> Brand</th>
							<th><i class="ti-package align-middle"></i> Penyedia</th>
							<th><i class="ti-package align-middle"></i> Kategori</th>
							<th class="text-center"><i class="ti-menu-alt align-middle"></i> Kode Unik</th>
							<th class="text-center"><i class="ti-check-box align-middle"></i> Status</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						{{-- @forelse ($brand as $item)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td><a href="{{ route('produk.brand', ['produkSlug' => $produk->slug, 'kategoriSlug' => $item->kategori->slug, 'brandSlug' => $item->slug]) }}" class="text-decoration-none">{{ $item->nama_brand }}</a></td>
							<td>{{ $item->kategori->nama_kategori }}</td>
							<td>{{ $item->kategori->nama_kategori }}</td>
							<td class="text-center">
								{{ $item->items_count }}
							</td>
							<td class="text-center">
								@if ($item->aktif == 'Y')
								<span class="badge badge-success">Aktif</span>									
								@else
								<span class="badge badge-danger">Tidak Aktif</span>									
								@endif
							</td>
						</tr>
						@empty
							
						@endforelse --}}
					</tbody>
				</table>
			</div>
		</div>
	</div>
    <div class="fixed-bottom d-flex justify-content-end mb-4 mr-5">
        <a href="{{ route('pembayaran.tambah') }}" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i></a>
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
