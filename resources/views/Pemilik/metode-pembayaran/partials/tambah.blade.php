@section('title', 'Metode Pembayaran')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Metode Pembayaran</h3>
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('metode-pembayaran') }}">Metode Pembayaran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
        </ol>
    </nav>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
            <form action="{{ route('metode-pembayaran.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="nama_metode" class="col-form-label">Metode Pembayaran</label>
                        <input type="text" class="form-control" id="nama_metode" placeholder="Metode Pembayaran" name="nama_metode" value="{{ old('nama_metode') }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="penyedia_pembayaran_id" class="col-form-label">Penyedia</label>
                        <select id="penyedia_pembayaran_id" class="form-control" name="penyedia_pembayaran_id" required>
                            <option value="" hidden>-- Pilih tipe --</option>
                            @forelse ($penyediaPembayaran as $item)
								<option value="{{ $item->id }}" @if(old('penyedia_pembayaran_id') == $item->id) selected @endif>{{ $item->nama_penyedia }}</option>
							@empty
								
							@endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kategori_pembayaran_id" class="col-form-label">Kategori</label>
                        <select id="kategori_pembayaran_id" class="form-control" name="kategori_pembayaran_id" required>
                            <option value="" hidden>-- Pilih tipe --</option>
                            @forelse ($kategoriPembayaran as $item)
								<option value="{{ $item->id }}" @if(old('kategori_pembayaran_id') == $item->id) selected @endif>{{ $item->nama_kategori }}</option>
							@empty
								
							@endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kode_unik" class="col-form-label">Kode Unik</label>
                        <input type="text" class="form-control" id="kode_unik" placeholder="Kode Unik" name="kode_unik" value="{{ old('kode_unik') }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="aktif" class="col-form-label">Status</label>
                        <select id="aktif" class="form-control" name="aktif" required>
                            <option value="" hidden>-- Pilih tipe --</option>
							<option value="Y" @if(old('aktif') == 'Y') selected @endif>Aktif</option>
							<option value="N" @if(old('aktif') == 'N') selected @endif>Tidak Aktif</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="logo" class="col-form-label">Logo</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="logo" aria-describedby="logo" name="logo">
                                <label class="custom-file-label" for="logo">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-rounded btn-block btn-primary mt-2">Simpan</button>
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
