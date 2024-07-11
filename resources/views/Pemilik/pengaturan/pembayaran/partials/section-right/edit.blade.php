@if (Request::segment(4) == 'produk')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <h3 class="card-title mb-4">Edit Penyedia</h3>
        <form action="{{ route('kategori.produk.update', $data->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama Penyedia</label>
                <input type="text" id="nama_produk" class="form-control @error('nama_produk') is-invalid @enderror"
                    name="nama_produk" placeholder="Nama Produk" value="{{ old('nama_produk', $data->nama_produk) }}" required>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@elseif (Request::segment(4) == 'kategori')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <h3 class="card-title mb-4">Edit Kategori</h3>
        <form action="{{ route('kategori.kategori.update', $data->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" id="nama_kategori"
                    class="form-control @error('nama_kategori') is-invalid @enderror" name="nama_kategori"
                    placeholder="Nama Kategori" value="{{ old('nama_kategori', $data->nama_kategori) }}" required>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>