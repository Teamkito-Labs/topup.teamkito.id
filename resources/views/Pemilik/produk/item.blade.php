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
            <li class="breadcrumb-item"><a
                    href="{{ route('produk.show', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug]) }}">{{ $kategori->nama_kategori }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">{{ $brand->nama_brand }}</li>
        </ol>
    </nav>
    <div class="overflow-posisi-x">
        <a href="{{ route('produk.brand', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug]) }}"
            class="btn @if(Request::segment(8) == '') btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">Semua</a>
        @forelse ($tipe as $item)
        <a href="{{ route('produk.brand.show', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug, 'tipeSlug' => $item->slug]) }}"
            class="btn @if(Request::segment(8) == $item->slug) btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">{{ $item->nama_tipe }}</a>
        @empty

        @endforelse
    </div>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
        <div class="card-body">
            <div class="clearfix pb-3">
                <span class="float-left text-muted mt-1">Diperbarui 10/07/2024 - 18:30 WIB</span>
                <button type="submit" class="btn btn-sm btn-outline-primary btn-rounded float-right"><i class="fa fa-refresh mr-1"></i>Sinkronisasi Produk Digiflazz</button>
            </div>
            <div class="table-responsive">
                <table class="table table-borderless">
                    <thead class="bg-light">
                        <tr>
                            <th></th>
                            <th>#</th>
                            <th><i class="ti-crown align-middle"></i> Kode</th>
                            <th><i class="pe-7s-diamond align-middle"></i> Item</th>
                            <th><i class="ti-money align-middle"></i> Jual</th>
                            <th><i class="ti-money align-middle"></i> Modal</th>
                            <th><i class="pe-7s-cash align-middle"></i> Profit</th>
                            <th><i class="pe-7s-cash align-middle"></i> Diperbarui</th>
                            <th class="text-center"><i class="ti-check-box align-middle"></i> Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                        <tr>
                            <td>
                                <input type="checkbox" name="checkbox-1" id="checkbox-13">
                            </div>
                            </div></td>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_produk }}</td>
                            <td class="font-weight-bold">
								@if ($item->nama_custom_item == '')
									<a href="{{ route('produk.item.edit', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug, 'itemSlug' => $item->slug]) }}" class="text-sm text-info "><u>Belum dimasukkan</u></a>
								@else
									{{ $item->nama_custom_item }}
								@endif
							</td>
                            <td class="font-weight-bold">{{ formatRupiah($item->jual) }}</td>
                            <td>{{ formatRupiah($item->modal) }}</td>
                            <td>{{ formatRupiah($item->modal * $item->profit / 100) }}</td>
                            <td>{{ tanggal($item->updated_at) }}</td>
                            <td class="text-center">
                                @if ($item->aktif == 'Y')
                                <span class="badge badge-success">Aktif</span>
                                @else
                                <span class="badge badge-danger">Tidak Aktif</span>
                                @endif
                            </td>
                            <td class="text-right col-1">
                                <div class="d-flex justify-content-start">
                                    <a href="{{ route('produk.item.edit', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug, 'itemSlug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
                                        <i class="zmdi zmdi-edit"></i>
                                    </a>
                                    <a class="btn btn-link btn-sm px-2 text-dark" data-toggle="modal"
                                        data-target="#modalHapusItem{{ $item->id }}">
                                        <i class="zmdi zmdi-delete"></i>
                                    </a>
									<div class="modal fade" id="modalHapusItem{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-body text-center">
													<p class="mb-2">Apakah Anda yakin ingin menghapus item
														<span class="font-weight-bold">{{ $item->nama_custom_item }}</span>?
													</p>
													<form action="{{ route('produk.item.delete', ['itemId' => $item->id]) }}" method="post">
														@csrf
														@method('DELETE')
														<input type="hidden" name="produk_slug" value="{{ $produk->slug }}">
														<input type="hidden" name="kategori_slug" value="{{ $kategori->slug }}">
														<input type="hidden" name="brand_slug" value="{{ $brand->slug }}">
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
                            <td colspan="7">Data belum tersedia...</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="fixed-bottom d-flex justify-content-end mb-4 mr-5">
        <a href="{{ route('produk.item.tambah', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug]) }}" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i></a>
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
	@if(session()->has('info'))
    <script>
        Swal.fire({
			title: 'Perhatian!',
			text: '{{ session()->get("info") }}',
			type: 'info',
			showConfirmButton: false, // Hide the confirm button
			showCancelButton: false, // Hide the confirm button
			timer: 1500, // Close automatically after 1500ms (1,5 seconds)
			allowOutsideClick: false,
		});
    </script>
    @endif
    @endpush
</x-app-layout>
