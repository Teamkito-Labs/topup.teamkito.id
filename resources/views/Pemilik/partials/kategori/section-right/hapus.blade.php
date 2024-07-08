@if (Request::segment(4) == 'produk')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <form action="{{ route('kategori.produk.store') }}" method="post">
            @csrf
            <p class="mb-0">Apakah Anda yakin ingin menghapus produk<span class="font-weight-bold"> {{ $data->nama_produk }}</span>?</p>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Ubah</button>
            </div>
        </form>
    </div>
</div>
@elseif (Request::segment(4) == 'kategori')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <form action="{{ route('kategori.produk.store') }}" method="post">
            @csrf
            <p class="mb-0">Apakah Anda yakin ingin menghapus kategori<span class="font-weight-bold"> {{ $data->nama_kategori }}</span>?</p>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Ubah</button>
            </div>
        </form>
    </div>
</div>
@elseif (Request::segment(4) == 'brand')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <form action="{{ route('kategori.produk.store') }}" method="post">
            @csrf
            <p class="mb-0">Apakah Anda yakin ingin menghapus brand<span class="font-weight-bold"> {{ $data->nama_brand }}</span>?</p>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Ubah</button>
            </div>
        </form>
    </div>
</div>
@elseif (Request::segment(4) == 'tipe')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <form action="{{ route('kategori.produk.store') }}" method="post">
            @csrf
            <p class="mb-0">Apakah Anda yakin ingin menghapus tipe<span class="font-weight-bold"> {{ $data->nama_tipe }}</span>?</p>
            <div class="d-flex justify-content-end">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Ubah</button>
            </div>
        </form>
    </div>
</div>
@endif
