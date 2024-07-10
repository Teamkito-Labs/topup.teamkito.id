<div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
	<div class="card-body">
		<ul class="nav nav-tabs nav-bordered nav-fill">
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
				<a href="{{ route('kategori.create', 'produk') }}" class="btn btn-primary btn-rounded btn-sm align-right mb-3">
					<i class="zmdi zmdi-plus align-middle"></i> Produk
				</a>
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
									<div class="d-flex justify-content-start">
										<a href="{{ route('kategori.edit', ['jenis' => 'produk', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-edit"></i>
										</a>
										<a href="{{ route('kategori.delete', ['jenis' => 'produk', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-delete"></i>
										</a>
									</div>
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
				<a href="{{ route('kategori.create', 'kategori') }}" class="btn btn-primary btn-rounded btn-sm align-right mb-3">
					<i class="zmdi zmdi-plus align-middle"></i> Kategori
				</a>
				<div class="table-responsive">
					<table class="table table-borderless">
						<thead class="bg-light">
							<tr>
								<th>#</th>
								<th><i class="ti-layers align-middle"></i> Produk</th>
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
								<td>{{ $item->produk->nama_produk }}</td>
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
									<div class="d-flex justify-content-start">
										<a href="{{ route('kategori.edit', ['jenis' => 'kategori', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-edit"></i>
										</a>
										<a href="{{ route('kategori.delete', ['jenis' => 'kategori', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-delete"></i>
										</a>
									</div>
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
				<a href="{{ route('kategori.create', 'brand') }}" class="btn btn-primary btn-rounded btn-sm align-right mb-3">
					<i class="zmdi zmdi-plus align-middle"></i> Brand
				</a>
				<div class="table-responsive">
					<table class="table table-borderless">
						<thead class="bg-light">
							<tr>
								<th>#</th>
								<th><i class="ti-layers align-middle"></i> Kategori</th>
								<th><i class="ti-dropbox align-middle"></i> Keterangan</th>
								<th><i class="ti-link align-middle"></i> Slug</th>
								<th class="hidden-sm"><i class="ti-check-box align-middle"></i> Status</th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							@forelse ($brand as $item)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $item->kategori->nama_kategori }}</td>
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
									<div class="d-flex justify-content-start">
										<a href="{{ route('kategori.edit', ['jenis' => 'brand', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-edit"></i>
										</a>
										<a href="{{ route('kategori.delete', ['jenis' => 'brand', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-delete"></i>
										</a>
									</div>
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
				<a href="{{ route('kategori.create', 'tipe') }}" class="btn btn-primary btn-rounded btn-sm align-right mb-3">
					<i class="zmdi zmdi-plus align-middle"></i> Tipe
				</a>
				<div class="table-responsive">
					<table class="table table-borderless">
						<thead class="bg-light">
							<tr>
								<th>#</th>
								<th><i class="ti-layers align-middle"></i> Ketegori</th>
								<th><i class="ti-dropbox align-middle"></i> Keterangan</th>
								<th><i class="ti-link align-middle"></i> Slug</th>
								<th class="hidden-sm"><i class="ti-check-box align-middle"></i> Status</th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
							@forelse ($tipe as $item)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $item->kategori->nama_kategori }}</td>
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
									<div class="d-flex justify-content-start">
										<a href="{{ route('kategori.edit', ['jenis' => 'tipe', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-edit"></i>
										</a>
										<a href="{{ route('kategori.delete', ['jenis' => 'tipe', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-delete"></i>
										</a>
									</div>
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