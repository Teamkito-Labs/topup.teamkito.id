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
    <h3 class="card-title mb-4"></h3>
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('flash-sale') }}">Flash Sale</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $itemKategori->nama_kategori }}</li>
        </ol>
    </nav>
	<div class="overflow-posisi-x mb-1">
		<a href="{{ route('flash-sale') }}" class="btn @if(Request::segment(5) == '') btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">Semua</a>
		@foreach ($brand as $item)
			<a href="{{ route('flash-sale.brand', ['kategoriSlug' => $itemKategori->slug, 'brandSlug' => $item->slug]) }}" class="btn @if(Request::segment(5) == $item->slug) btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">{{ $item->nama_brand }}</a>
		@endforeach
	</div>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-borderless text-nowrap">
					<thead class="bg-light">
						<tr>
							<th>#</th>
							<th><i class="ti-crown align-middle"></i> Thumbnail</th>
							<th><i class="ti-package align-middle"></i> Kategori</th>
							<th><i class="ti-crown align-middle"></i> Brand</th>
							<th class="text-center"><i class="ti-menu-alt align-middle"></i> Item</th>
                            <th><i class="ti-money align-middle"></i> Harga</th>
                            <th><i class="pe-7s-cash align-middle"></i> Diskon</th>
							<th><i class="ti-money align-middle"></i> Potongan</th>
                            <th><i class="pe-7s-cash align-middle"></i> Kuota</th>
                            <th><i class="pe-7s-cash align-middle"></i> Batas</th>
							<th class="text-center"><i class="ti-check-box align-middle"></i> Status</th>
							<th class="text-center"></th>
						</tr>
					</thead>
					<tbody>
						@forelse ($flashSale as $item)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{ $item->tdumbnail }}</td>
							<td>{{ $item->kategori->nama_kategori }}</td>
							<td>{{ $item->brand->nama_brand }}</td>
							<td class="text-center">{{ $item->item->nama_custom_item }}</td>
                            <td>{{ formatRupiah($item->item->modal + $item->item->profit) }}</td>
                            <td>{{ $item->diskon }}</td>
							<td>{{ formatRupiah($item->potongan) }}</td>
                            <td>{{ $item->kuota }}</td>
                            <td>{{ $item->batas_waktu }}</td>
							<td class="text-center">
								@if ($item->aktif == 'Y')
								<span class="badge badge-success">Aktif</span>									
								@else
								<span class="badge badge-danger">Tidak Aktif</span>									
								@endif
							</td>
							<td>
								<div class="d-flex justify-content-start">
                                    <a href="{{ route('flash-sale.edit', ['id' => $item->id]) }}" class="btn btn-link btn-sm px-2 text-dark">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-link btn-sm px-2 text-dark" data-toggle="modal"
                                        data-target="#modalHapusMetodePembayaran{{ $item->id }}">
                                        <i class="zmdi zmdi-delete"></i>
                                    </a>
									<div class="modal fade" id="modalHapusMetodePembayaran{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-body text-center">
													<p class="mb-2">Apakah Anda yakin ingin menghapus flash sale item <br>
														<span class="font-weight-bold">{{ $item->item->nama_custom_item }}</span>?
													</p>
													<form action="{{ route('flash-sale.delete', ['id' => $item->id]) }}" method="POST">
														@csrf
														@method('DELETE')
														<button type="button" class="btn btn-secondary btn-rounded btn-sm" data-dismiss="modal">Batal</button>
														<button type="submit" class="btn btn-primary btn-rounded btn-sm">Hapus</button>
													</form>
												</div>
											</div>
										</div>
									</div>
                                </div>
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="11">-- Data masih kosong --</td>
						</tr>
						@endforelse
					</tbody>
				</table>
			</div>
		</div>
	</div>
    <div class="fixed-bottom d-flex justify-content-end mb-4 mr-5">
        <a href="{{ route('flash-sale.tambah') }}" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i></a>
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
