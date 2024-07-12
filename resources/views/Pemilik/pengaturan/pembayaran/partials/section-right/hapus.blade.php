@if (Request::segment(4) == 'penyedia')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0 text-center">
    <div class="card-body">
        <form action="{{ route('pembayaran.penyedia.destroy', ['id' => $data->id]) }}" method="post">
            @csrf
            <p class="mb-0">Apakah Anda yakin ingin menghapus penyedia<span class="font-weight-bold"> {{ $data->nama_produk }}</span>?</p>
            <div class="d-flex justify-content-center mt-1">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Hapus</button>
            </div>
        </form>
    </div>
</div>
@elseif (Request::segment(4) == 'kategori')
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0 text-center">
    <div class="card-body">
        <form action="{{ route('pembayaran.kategori.destroy', ['id' => $data->id]) }}" method="post">
            @csrf
            <p class="mb-0">Apakah Anda yakin ingin menghapus kategori<span class="font-weight-bold"> {{ $data->nama_kategori }}</span>?</p>
            <div class="d-flex justify-content-center mt-1">
                <a href="{{ route('kategori') }}" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</a>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Hapus</button>
            </div>
        </form>
    </div>
</div>
@endif