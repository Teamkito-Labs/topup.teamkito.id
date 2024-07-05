<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <form action="{{ route('kategori.produk.store') }}" method="post">
            @csrf
            <p class="mb-0">Apakah Anda yakin ingin menghapus data ini?</p>
            <span class="font-weight-bold">Pascabayar</span>
            <div class="d-flex justify-content-end">
                <button @click="window.history.back()" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</button>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Ubah</button>
            </div>
        </form>
    </div>
</div>