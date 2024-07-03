@section('title', 'Kategori Produk')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Kategori Produk</h3>
    <div class="row">
        <div class="col-6 shadow-sm rounded-lg card height-card box-margin mx-0 px-0">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-rounded btn-sm align-middle mb-3" data-toggle="modal"
                    data-target="#exampleModal">
                    <i class="zmdi zmdi-plus align-middle"></i> Kategori
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="nav nav-tabs nav-bordered">
                                    <li class="nav-item">
                                        <a href="#modal-produk" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            Produk
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#modal-kategori" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            Kategori
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#modal-brand" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Brand
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#modal-tipe" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Tipe
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="modal-produk">
										<form action="{{ route('kategori-produk.produk.store') }}" method="post">
											@csrf
											<div class="form-group mb-3">
												<label for="nama_produk">Nama Produk</label>
												<input type="text" id="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk" placeholder="Nama Produk" required>
											</div>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</form>
                                    </div>
                                    <div class="tab-pane" id="modal-kategori">
                                        <form action="{{ route('kategori-produk.kategori.store') }}" method="post">
											@csrf
											<div class="form-group mb-3">
												<label for="produk_id">Produk</label>
												<select class="form-control" id="produk_id" name="produk_id" required>
													<option value="" hidden>-- Pilih nama produk --</option>
													@forelse ($produk as $item)
													<option value="{{ $item->id }}">{{ $item->nama_produk }}</option>
													@empty
														
													@endforelse
												</select>
											</div>
											<div class="form-group mb-3">
												<label for="nama_kategori">Nama Kategori</label>
												<input type="text" id="nama_kategori" class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori" placeholder="Nama Kategori" required>
											</div>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</form>
                                    </div>
                                    <div class="tab-pane" id="modal-brand">
                                        <p>Modal Brand</p>
                                    </div>
                                    <div class="tab-pane" id="modal-tipe">
                                        <p>Modal Tipe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <div class="table-responsive">
							<table class="table table-borderless">
								<thead class="bg-light">
									<tr>
										<th>#</th>
										<th><i class="ti-dropbox align-middle"></i> Keterangan</th>
										<th><i class="ti-link align-middle"></i> Slug</th>
										<th class="hidden-sm"><i class="ti-check-box align-middle"></i> Status</th>
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
                        <div class="table-responsive">
							<table class="table table-borderless">
								<thead class="bg-light">
									<tr>
										<th>#</th>
										<th><i class="ti-dropbox align-middle"></i> Keterangan</th>
										<th><i class="ti-link align-middle"></i> Slug</th>
										<th class="hidden-sm"><i class="ti-check-box align-middle"></i> Status</th>
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
                        <p>Ini Menu Merek</p>
                    </div>
                    <div class="tab-pane" id="menu-tipe">
                        <p>Ini Menu Tipe</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('styles')
    @endpush
    @push('scripts')
    @endpush
</x-app-layout>
