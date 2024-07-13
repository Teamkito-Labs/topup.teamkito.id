@if (Request::segment(4) == 'penyedia')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <h3 class="card-title mb-4">Edit Penyedia</h3>
        <form action="{{ route('pembayaran.penyedia.update', ['id' => $data->id]) }}" method="POST">
            @csrf
			@method('PATCH')
            <div class="form-group">
                <label for="nama_penyedia">Nama Penyedia</label>
                <input type="text" id="nama_penyedia" class="form-control @error('nama_penyedia') is-invalid @enderror"
                    name="nama_penyedia" placeholder="Nama Produk" value="{{ old('nama_penyedia', $data->nama_penyedia) }}" required>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('pembayaran') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@elseif (Request::segment(4) == 'kategori')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <h3 class="card-title mb-4">Edit Kategori</h3>
        <form action="{{ route('pembayaran.kategori.update', ['id' => $data->id]) }}" method="POST">
            @csrf
			@method('PATCH')
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" id="nama_kategori"
                    class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori"
                    placeholder="Nama Kategori" value="{{ old('nama_kategori', $data->nama_kategori) }}" required>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('pembayaran') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endif