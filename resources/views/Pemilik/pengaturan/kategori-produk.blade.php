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
			<div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
				<div class="card-body">
					<ul class="nav nav-tabs nav-bordered">
						<li class="nav-item">
							<a href="#menu-produk" data-toggle="tab" aria-expanded="false" class="nav-link active">
								Produk
							</a>
						</li>
						<li class="nav-item">
							<a href="#menu-kategori" data-toggle="tab" aria-expanded="false" class="nav-link">
								Kategori
							</a>
						</li>
						<li class="nav-item">
							<a href="#menu-brand" data-toggle="tab" aria-expanded="false" class="nav-link">
								Brand
							</a>
						</li>
						<li class="nav-item">
							<a href="#menu-tipe" data-toggle="tab" aria-expanded="false" class="nav-link">
								Tipe
							</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane show active" id="menu-produk">
							<button type="button" class="btn btn-primary btn-rounded btn-sm align-right mb-3" data-toggle="modal"
								data-target="#exampleModal">
								<i class="zmdi zmdi-plus align-middle"></i> Produk
							</button>
							<div class="table-responsive">
								<table class="table table-borderless">
									<thead class="bg-light">
										<tr>
											<th>#</th>
											<th><i class="ti-dropbox align-middle"></i> Keterangan</th>
											<th class="hidden-sm"><i class="ti-link align-middle"></i> Slug</th>
											<th><i class="ti-check-box align-middle"></i> Status</th>
											<th class="text-center"></th>
										</tr>
									</thead>
									<tbody>
										@forelse ($produk as $item)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $item->nama_produk }}</td>
											<td class="hidden-sm">{{ $item->slug }}</td>
											<td>
												@if ($item->aktif == 'Y')
													<span class="badge badge-success">Aktif</span>
												@else
													<span class="badge badge-danger">Tidak Aktif</span>
												@endif
											</td>
											<td class="text-right">
												<button type="button" class="btn btn-link btn-sm px-2 text-dark"><i
														class="zmdi zmdi-edit"></i></button><button type="button"
													class="btn btn-link btn-sm px-2 text-dark"><i
														class="zmdi zmdi-delete"></i></button>
											</td>
										</tr>
										@empty
										<tr>
											<td colspan="4">Data masih kosong</td>
										</tr>
										@endforelse
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="menu-kategori">
							<button type="button" class="btn btn-primary btn-rounded btn-sm align-right mb-3" data-toggle="modal"
								data-target="#exampleModal">
								<i class="zmdi zmdi-plus align-middle"></i> Kategori
							</button>
							<div class="table-responsive">
								<table class="table table-borderless">
									<thead class="bg-light">
										<tr>
											<th>#</th>
											<th><i class="ti-layers align-middle"></i> Produk</th>
											<th><i class="ti-dropbox align-middle"></i> Keterangan</th>
											<th class="hidden-sm"><i class="ti-link align-middle"></i> Slug</th>
											<th"><i class="ti-check-box align-middle"></i> Status</th>
											<th class="text-center"></th>
										</tr>
									</thead>
									<tbody>
										@forelse ($kategori as $item)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $item->nama_kategori }}</td>
											<td class="hidden-sm">{{ $item->slug }}</td>
											<td>
												@if ($item->aktif == 'Y')
													<span class="badge badge-success">Aktif</span>
												@else
													<span class="badge badge-danger">Tidak Aktif</span>
												@endif
											</td>
											<td class="text-right">
												<button type="button" class="btn btn-link btn-sm px-2 text-dark"><i
														class="zmdi zmdi-edit"></i></button><button type="button"
													class="btn btn-link btn-sm px-2 text-dark"><i
														class="zmdi zmdi-delete"></i></button>
											</td>
										</tr>
										@empty
										<tr>
											<td colspan="5">Data masih kosong</td>
										</tr>
										@endforelse
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="menu-brand">
							<button type="button" class="btn btn-primary btn-rounded btn-sm align-right mb-3" data-toggle="modal"
								data-target="#exampleModal">
								<i class="zmdi zmdi-plus align-middle"></i> Brand
							</button>
							<div class="table-responsive">
								<table class="table table-borderless">
									<thead class="bg-light">
										<tr>
											<th>#</th>
											<th><i class="ti-layers align-middle"></i> Kategori</th>
											<th><i class="ti-dropbox align-middle"></i> Keterangan</th>
											<th class="hidden-sm"><i class="ti-link align-middle"></i> Slug</th>
											<th><i class="ti-check-box align-middle"></i> Status</th>
											<th class="text-center"></th>
										</tr>
									</thead>
									<tbody>
										@forelse ($brand as $item)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $item->nama_brand }}</td>
											<td class="hidden-sm">{{ $item->slug }}</td>
											<td>
												@if ($item->aktif == 'Y')
													<span class="badge badge-success">Aktif</span>
												@else
													<span class="badge badge-danger">Tidak Aktif</span>
												@endif
											</td>
											<td class="text-right">
												<button type="button" class="btn btn-link btn-sm px-2 text-dark"><i
														class="zmdi zmdi-edit"></i></button><button type="button"
													class="btn btn-link btn-sm px-2 text-dark"><i
														class="zmdi zmdi-delete"></i></button>
											</td>
										</tr>
										@empty
										<tr>
											<td colspan="5">Data masih kosong</td>
										</tr>
										@endforelse
									</tbody>
								</table>
							</div>
						</div>
						<div class="tab-pane" id="menu-tipe">
							<button type="button" class="btn btn-primary btn-rounded btn-sm align-right mb-3" data-toggle="modal"
								data-target="#exampleModal">
								<i class="zmdi zmdi-plus align-middle"></i> Tipe
							</button>
							<div class="table-responsive">
								<table class="table table-borderless">
									<thead class="bg-light">
										<tr>
											<th>#</th>
											<th><i class="ti-layers align-middle"></i> Ketegori</th>
											<th><i class="ti-dropbox align-middle"></i> Keterangan</th>
											<th class="hidden-sm"><i class="ti-link align-middle"></i> Slug</th>
											<th><i class="ti-check-box align-middle"></i> Status</th>
											<th class="text-center"></th>
										</tr>
									</thead>
									<tbody>
										@forelse ($tipe as $item)
										<tr>
											<td>{{ $loop->iteration }}</td>
											<td>{{ $item->nama_tipe }}</td>
											<td class="hidden-sm">{{ $item->slug }}</td>
											<td>
												@if ($item->aktif == 'Y')
													<span class="badge badge-success">Aktif</span>
												@else
													<span class="badge badge-danger">Tidak Aktif</span>
												@endif
											</td>
											<td class="text-right">
												<button type="button" class="btn btn-link btn-sm px-2 text-dark"><i
														class="zmdi zmdi-edit"></i></button><button type="button"
													class="btn btn-link btn-sm px-2 text-dark"><i
														class="zmdi zmdi-delete"></i></button>
											</td>
										</tr>
										@empty
										<tr>
											<td colspan="5">Data masih kosong</td>
										</tr>
										@endforelse
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-5 col-lg-5">
			@include('pemilik.partials.hapus-kategori')
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