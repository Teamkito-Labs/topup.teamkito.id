@if (Request::segment(4) == 'produk')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <h3 class="card-title mb-4">Edit Produk</h3>
        <form action="{{ route('kategori.produk.update', $data->id) }}" method="post">
            @csrf
			@method('PATCH')
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
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
			@method('PATCH')
            <div class="form-group">
                <label for="produk_id">Produk</label>
                <select class="form-control" id="produk_id" name="produk_id">
                    <option value="" hidden>-- Pilih Produk --</option>
                    @forelse ($produk as $item)
                    <option value="{{ $item->id }}" @if(old('produk_id', $data->produk_id) == $item->id) selected @endif>{{ $item->nama_produk }}</option>
                    @empty

                    @endforelse
                </select>
            </div>
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
@elseif (Request::segment(4) == 'brand')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <h3 class="card-title mb-4">Edit Brand</h3>
        <form action="{{ route('kategori.brand.update', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
			@method('PATCH')
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id">
                    <option value="" hidden>-- Pilih Kategori --</option>
                    @forelse ($kategori as $item)
                    <option value="{{ $item->id }}" @if(old('kategori_id', $data->kategori_id) == $item->id) selected @endif>{{ $item->nama_kategori }}</option>
                    @empty

                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="nama_brand">Nama Brand</label>
                <input type="text" id="nama_brand" class="form-control @error('nama_brand') is-invalid @enderror"
                    name="nama_brand" placeholder="Nama Brand" value="{{ old('nama_brand', $data->nama_brand) }}" required>
            </div>
            <div class="form-group">
                <label for="perangkat">Perangkat</label>
                <select class="form-control" id="perangkat" name="perangkat">
                    <option value="" hidden>-- Pilih Perangkat --</option>
                    <option value="Mobile" @if(old('perangkat', $data->perangkat) == 'Mobile') selected @endif>Mobile</option>
                    <option value="PC" @if(old('perangkat', $data->perangkat) == 'PC') selected @endif>PC</option>
                    <option value="Konsol" @if(old('perangkat', $data->perangkat) == 'Konsol') selected @endif>Konsol</option>
                </select>
            </div>
			<div class="form-group">
                <label for="jumlah_input">Jumlah Input</label>
                <select class="form-control" id="jumlah_input" name="jumlah_input">
                    <option value="" hidden>-- Pilih Jumlah Input --</option>
                    <option value="1" @if(old('jumlah_input', $data->jumlah_input) == '1') selected @endif>1</option>
                    <option value="2" @if(old('jumlah_input', $data->jumlah_input) == '2') selected @endif>2</option>
                </select>
            </div>
            <div class="form-group g-mb-20">
                <label class="g-mb-10" for="keterangan">Keterangan</label>
                <textarea id="keterangan" class="form-control form-control-md g-resize-none rounded-0" rows="3" placeholder="Masukkan keterangan Brand" name="keterangan" required>{{ old('keterangan', $data->keterangan) }}</textarea>
                <small class="form-text text-muted g-font-size-default g-mt-10">
                    <strong>Catatan:</strong> height of the textarea depends on the rows attribute.
                </small>
            </div>
			<div class="form-group">
                <label for="nama_brand">Logo</label>
                <input type="file" class="form-control @error('logo') is-invalid @enderror" id="logo" aria-describedby="logo" name="logo">
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@elseif (Request::segment(4) == 'tipe')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <h3 class="card-title mb-4">Edit Tipe</h3>
        <form action="{{ route('kategori.tipe.update', $data->id) }}" method="post">
            @csrf
			@method('PATCH')
            <div class="form-group">
                <label for="kategori_id">Kategori</label>
                <select class="form-control" id="kategori_id" name="kategori_id">
                    <option value="" hidden>-- Pilih Kategori --</option>
                    @forelse ($kategori as $item)
                    <option value="{{ $item->id }}" @if(old('kategori_id', $data->kategori_id) == $item->id) selected @endif>{{ $item->nama_kategori }}</option>
                    @empty

                    @endforelse
                </select>
            </div>
            <div class="form-group">
                <label for="nama_tipe">Nama Tipe</label>
                <input type="text" id="nama_tipe" class="form-control @error('nama_tipe') is-invalid @enderror"
                    name="nama_tipe" placeholder="Nama Tipe" value="{{ old('nama_tipe', $data->nama_tipe) }}" required>
            </div>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endif