
<div class="card shadow-lg rounded-lg height-card box-margin mx-0 px-0">
    <div class="card-body">
        <h3 class="card-title mb-4">Tambah Kategori</h3>
        <form action="{{ route('kategori.produk.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlSelect1">Produk</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" id="nama_produk"
                    class="form-control @error('nama_produk') is-invalid @enderror" name="nama_produk"
                    placeholder="Nama Produk" required>
            </div>
            <div class="d-flex justify-content-end">
                <button @click="window.history.back()" class="btn btn-secondary btn-rounded btn-sm mr-2">Batal</button>
                <button type="submit" class="btn btn-primary btn-rounded btn-sm">Simpan</button>
            </div>
        </form>
    </div>
</div>