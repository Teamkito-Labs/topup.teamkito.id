@section('title', 'Flash Sale')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Flash Sale</h3>
	<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('flash-sale') }}">Flash Sale</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>
    <div class="card shadow-sm rounded-lg height-card box-margin mx-0 px-0">
		<div class="card-body">
            <form id="edit-item-form" action="{{ route('flash-sale.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
				@method('PATCH')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="produk_id" class="col-form-label">Produk</label>
                        <select id="produk_id" class="form-control @error('produk_id') is-invalid @enderror" name="produk_id" required>
                            <option value="" hidden>-- Pilih Produk --</option>
							@forelse ($produk as $item)
								<option value="{{ $item->id }}" @if($data->produk_id == $item->id) selected @endif>{{ $item->nama_produk }}</option>
							@empty
								
							@endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="kategori_id" class="col-form-label">Kategori</label>
                        <select id="kategori_id" class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id" required>
                            <option value="" hidden>-- Pilih Kategori --</option>
							@forelse ($kategori as $item)
								<option value="{{ $item->id }}" @if($data->kategori_id == $item->id) selected @endif>{{ $item->nama_kategori }}</option>
							@empty
								
							@endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="brand_id" class="col-form-label">Brand</label>
                        <select id="brand_id" class="form-control @error('brand_id') is-invalid @enderror" name="brand_id" required>
                            <option value="" hidden>-- Pilih Brand --</option>
							@forelse ($brand as $item)
								<option value="{{ $item->id }}" @if($data->brand_id == $item->id) selected @endif>{{ $item->nama_brand }}</option>
							@empty
								
							@endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="item_id" class="col-form-label">Item</label>
                        <select id="item_id" class="form-control @error('item_id') is-invalid @enderror" name="item_id" required>
                            <option value="" hidden>-- Pilih Item --</option>
							@forelse ($items as $item)
								<option value="{{ $item->id }}" @if($data->item_id == $item->id) selected @endif>{{ $item->nama_item }}</option>
							@empty
								
							@endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="harga" class="col-form-label">Harga</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">Rp</span>
							</div>
							<input type="text" class="form-control @error('harga') is-invalid @enderror" aria-label="Profit" min="0" id="harga" name="harga" value="{{ $data->item->modal + $data->item->profit }}" required disabled>
						</div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="diskon" class="col-form-label">Diskon</label>
						<div class="input-group">
							<input type="number" class="form-control @error('diskon') is-invalid @enderror" aria-label="Profit" min="0" id="diskon" name="diskon" placeholder="Diskon" value="{{ $data->diskon }}" required max="100">
							<div class="input-group-prepend">
								<span class="input-group-text">%</span>
							</div>
						</div>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="potongan" class="col-form-label">Potongan</label>
                        <input type="text" class="form-control @error('potongan') is-invalid @enderror" id="potongan" placeholder="" name="potongan" value="{{ $data->potongan }}" required readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="kuota" class="col-form-label">Kuota</label>
                        <input type="number" class="form-control @error('kuota') is-invalid @enderror" id="kuota" placeholder="Metode Pembayaran" name="kuota" value="{{ old('kuota', $data->kuota) }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="batas_waktu" class="col-form-label">Batas Waktu</label>
                        <input type="number" class="form-control @error('batas_waktu') is-invalid @enderror" id="batas_waktu" placeholder="Batas Waktu" name="batas_waktu" value="{{ old('batas_waktu', $data->batas_waktu) }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="thumbnail" class="col-form-label">Thumbnail</label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" id="thumbnail" aria-describedby="thumbnail" name="thumbnail">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="aktif" class="col-form-label">Status</label>
                        <select id="aktif" class="form-control @error('aktif') is-invalid @enderror" name="aktif" required>
                            <option value="" hidden>-- Pilih Status --</option>
							<option value="Y" @if(old('aktif', $data->aktif) == 'Y') selected @endif>Aktif</option>
							<option value="N" @if(old('aktif', $data->aktif) == 'N') selected @endif>Tidak Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
						<a href="{{ route('flash-sale') }}" class="btn btn-rounded btn-block btn-secondary mt-2">Batal</a>
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
		.is-invalid {
            border-color: #dc3545;
        }
	</style>
    @endpush
    @push('scripts')
	<script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('edit-item-form');
            const inputs = form.querySelectorAll('input[required], select[required]');
            
            function validateInput(input) {
                if (input.value.trim() === '') {
                    input.classList.add('is-invalid');
                } else {
                    input.classList.remove('is-invalid');
                }
            }

            inputs.forEach(input => {
                validateInput(input); // Validate on page load
                input.addEventListener('input', () => validateInput(input));
            });

            form.addEventListener('submit', function(event) {
                let isValid = true;
                inputs.forEach(input => {
                    validateInput(input);
                    if (input.classList.contains('is-invalid')) {
                        isValid = false;
                    }
                });
                if (!isValid) {
                    event.preventDefault();
                }
            });
        });
    </script>
    @endpush
</x-app-layout>
