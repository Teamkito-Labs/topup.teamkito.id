@section('title', 'Mobile Legends')
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
            <li class="breadcrumb-item"><a href="{{ route('produk', ['produkSlug' => $produk->slug]) }}">Produk</a></li>
            <li class="breadcrumb-item"><a href="{{ route('produk.show', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug]) }}">{{ $kategori->nama_kategori }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $brand->nama_brand }}</li>
        </ol>
    </nav>
    <div class="overflow-posisi-x">
		<a href="{{ route('produk.brand', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug]) }}" class="btn @if(Request::segment(8) == '') btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">Semua</a>
		@forelse ($tipe as $item)
			<a href="{{ route('produk.brand.show', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug, 'tipeSlug' => $item->slug]) }}" class="btn @if(Request::segment(8) == $item->slug) btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">{{ $item->nama_tipe }}</a>
		@empty
			
		@endforelse
    </div>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead class="bg-light">
                        <tr>
                            <th>#</th>
                            <th><i class="ti-crown align-middle"></i> Kode</th>
                            <th><i class="pe-7s-diamond align-middle"></i> Item</th>
                            <th><i class="ti-money align-middle"></i> Jual</th>
                            <th><i class="ti-money align-middle"></i> Modal</th>
                            <th><i class="pe-7s-cash align-middle"></i> Profit</th>
                            <th class="text-center"><i class="ti-check-box align-middle"></i> Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
						@forelse ($items as $item)
						<tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_produk }}</td>
                            <td>{{ $item->nama_item }}</td>
                            <td>Rp164.605</a></td>
                            <td>Rp64.605</a></td>
                            <td>Rp64.605</a></td>
                            <td class="text-center">
								@if ($item->aktif == 'Y')
								<span class="badge badge-success">Aktif</span>									
								@else
								<span class="badge badge-danger">Tidak Aktif</span>									
								@endif
							</td>
                            <td class="text-right col-1">
                                <div class="d-flex justify-content-start">
                                    <a href="{{ route("edit") }}" class="btn btn-link btn-sm px-2 text-dark">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <span href="" class="btn btn-link btn-sm px-2 text-dark" data-toggle="modal"
									data-target="#exampleModal">
                                        <i class="zmdi zmdi-delete"></i>
									</span>
                                </div>
                            </td>
                        </tr>
						@empty
						<tr>
							<td colspan="7">Data masih kosong..</td>
						</tr>
						@endforelse
                    </tbody>
                </table>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <p class="mb-2">Apakah Anda yakin ingin menghapus item<span class="font-weight-bold"> </span>?</p>
							<button type="button" class="btn btn-secondary btn-rounded btn-sm" data-dismiss="modal">Batal</button>
							<button type="button" class="btn btn-primary btn-rounded btn-sm">Hapus</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container fixed-bottom d-flex justify-content-end mb-5">
        <a href="{{ route("tambah") }}" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i></a>
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
