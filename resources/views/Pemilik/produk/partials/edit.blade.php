@section('title', 'Prabayar')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Prabayar</h3>
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Produk</a></li>
            <li class="breadcrumb-item"><a href="">Games</a></li>
            <li class="breadcrumb-item"><a href="">Mobile Legends</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
            <form action="{{ route('produk.item.update', ['itemId' => $data->id]) }}" method="PATCH">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEmail4" class="col-form-label">Produk</label>
                        <input type="text" class="form-control" id="inputEmail4" value="{{ $produk->nama_produk }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4" class="col-form-label">Kategori</label>
                        <input type="text" class="form-control" id="inputPassword4" value="{{ $kategori->nama_kategori }}" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4" class="col-form-label">Brand</label>
                        <input type="text" class="form-control" id="inputPassword4" value="{{ $brand->nama_brand }}" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="kode_produk" class="col-form-label">Kode Produk</label>
                        <input type="text" class="form-control" id="kode_produk" placeholder="Kode" name="kode_produk" value="{{ old('kode_produk', $data->kode_produk) }}" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tipe_id" class="col-form-label">Tipe</label>
                        <select id="tipe_id" class="form-control" name="tipe_id" required>
                            <option value="" hidden>-- Pilih tipe --</option>
                            @forelse ($tipe as $item)
								<option value="{{ $item->id }}" @if(old('tipe_id', $data->tipe_id) == $item->id) selected @endif>{{ $item->nama_tipe }}</option>
							@empty
								
							@endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="aktif" class="col-form-label">Status</label>
                        <select id="aktif" class="form-control" name="aktif" required>
                            <option value="" hidden>-- Pilih tipe --</option>
							<option value="Y" @if(old('aktif', $data->aktif) == 'Y') selected @endif>Aktif</option>
							<option value="N" @if(old('aktif', $data->aktif) == 'N') selected @endif>Tidak Aktif</option>
                        </select>
                    </div>
					<div class="form-group col-md-3">
                        <label for="profit" class="col-form-label">Profit</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Rp</span>
							</div>
							<input type="number" class="form-control" aria-label="Profit" min="0" id="profit" name="profit" placeholder="Profit" value="{{ $data->profit }}">
						</div>
                    </div>
                </div>
				<input type="hidden" name="produk_id" value="{{ $produk->id }}">
				<input type="hidden" name="kategori_id" value="{{ $kategori->id }}">
				<input type="hidden" name="brand_id" value="{{ $brand->id }}">
				<input type="hidden" name="produk_slug" value="{{ $produk->slug }}">
				<input type="hidden" name="kategori_slug" value="{{ $kategori->slug }}">
				<input type="hidden" name="brand_slug" value="{{ $brand->slug }}">
                <div class="row">
                    <div class="col-md-6">
						<a href="{{ route('produk.brand', ['produkSlug' => $produk->slug, 'kategoriSlug' => $kategori->slug, 'brandSlug' => $brand->slug]) }}" class="btn btn-rounded btn-block btn-secondary mt-">Batal</a>
                    </div>
                    <div class="col-md-6">
						<button type="submit" class="btn btn-rounded btn-block btn-primary mt-2">Simpan</button>
                    </div>
                </div>
            </form>
		</div>
	</div>      
    @push('styles')
	<style>
		.overflow-posisi-x {
			display: flex;
			overflow-x: auto;
			white-space: nowrap;
		}
	</style>
    @endpush
    @push('scripts')
    @endpush
</x-app-layout>
