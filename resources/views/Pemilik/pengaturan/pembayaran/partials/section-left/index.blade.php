<div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
	<div class="card-body">
		<ul class="nav nav-tabs nav-bordered nav-fill">
			<li class="nav-item">
				<a href="#menu-penyedia" data-toggle="tab" aria-expanded="false" class="nav-link active">
					Penyedia
				</a>
			</li>
			<li class="nav-item">
				<a href="#menu-kategori" data-toggle="tab" aria-expanded="false" class="nav-link">
					Kategori
				</a>
			</li>
		</ul>
		<div class="tab-content">
			<div class="tab-pane show active" id="menu-penyedia">
				<a href="{{ route('pembayaran.create', ['jenis' => 'penyedia']) }}" class="btn btn-primary btn-rounded btn-sm align-right mb-3">
					<i class="zmdi zmdi-plus align-middle"></i> Penyedia
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
							@forelse ($penyediaPembayaran as $item)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $item->nama_penyedia }}</td>
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
										<a href="{{ route('pembayaran.edit', ['jenis' => 'penyedia', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-edit"></i>
										</a>
										<a href="{{ route('pembayaran.delete', ['jenis' => 'penyedia', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-delete"></i>
										</a>
									</div>
								</td>
							</tr>
							@empty
							<tr>
								<td colspan="4">Data belum tersedia...</td>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
			<div class="tab-pane" id="menu-kategori">
				<a href="{{ route('pembayaran.create', ['jenis' => 'kategori']) }}" class="btn btn-primary btn-rounded btn-sm align-right mb-3">
					<i class="zmdi zmdi-plus align-middle"></i> Kategori
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
							@forelse ($kategoriPembayaran as $item)
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
									<div class="d-flex justify-content-start">
										<a href="{{ route('pembayaran.edit', ['jenis' => 'kategori', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-edit"></i>
										</a>
										<a href="{{ route('pembayaran.delete', ['jenis' => 'kategori', 'slug' => $item->slug]) }}" class="btn btn-link btn-sm px-2 text-dark">
											<i class="zmdi zmdi-delete"></i>
										</a>
									</div>
								</td>
							</tr>
							@empty
							<tr>
								<td colspan="5">Data belum tersedia...</td>
							</tr>
							@endforelse
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>