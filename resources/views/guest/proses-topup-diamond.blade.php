@section('title', $data->nama_brand)
@section('description', 'Top up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan top up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'top up game murah, top up game cepat, top up Free Fire murah, top up Mobile Legends cepat, top up
PUBG Mobile murah, top up Genshin Impact cepat, top up game online, top up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, top up UC PUBG murah, top up Genesis Crystal Genshin Impact, situs top up game terpercaya,
layanan top up game instan, top up game resmi, harga top up game terjangkau, top up game populer, top up game aman, top
up game mobile, top up game terbaik
')
@section('robots', 'index, follow')
<x-guest-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Top Up</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $data->nama_brand }}</li>
        </ol>
    </nav>
    <section id="proses-topup"
        x-data="{ informasiAkun: '', nominalTopup: '-', kodePromo: '', metodePembayaran: null, logoPembayaran: { DANA: 'https://www.lapakgaming.com/static/images/payment-methods/dana.webp?w=96&q=75', OVO: 'https://www.lapakgaming.com/static/images/payment-methods/gopay.webp?w=96&q=75' }, pilihPembayaranClass: '',  informasiKontak: '', itemHargaTopup: null, totalHarga: null }">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5">
                    <img class="shadow-sm rounded-lg mb-3"
                        src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/ID-HB-Flashsale-exorcist.png?tr=w-828%2Cq-75"
                        alt="Slide 1" />
                    <div id="langkah-topup" class="mt-5 d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                        <label class="font-weight-bold h4 text-body">Langkah Mudah Top-Up Voucher Game di
                            Teamkito</label>
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                    <div class="row">
                                        <div class="col-3 col-sm-4 col-md-4 col-lg-3 text-center">
                                            <img src="{{ asset('storage/img/flat-icon/ghost.png') }}" />
                                            <h1>01</h1>
                                        </div>
                                        <div class="col-9 col-sm-8 col-md-8 col-lg-9">
                                            <h5 >Pilih Game</h5>
                                            <p>Pilih game yang ingin Anda top-up dari daftar game yang tersedia.
                                                Kami menawarkan
                                                berbagai game populer, baik untuk platform mobile maupun PC. Gunakan
                                                fitur pencarian
                                                untuk menemukan game dengan cepat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                    <div class="row">
                                        <div class="col-3 col-sm-4 col-md-4 col-lg-3 text-center">
                                            <img src="{{ asset('storage/img/flat-icon/diamond.png') }}" />
                                            <h1 class="mb-0">02</h1>
                                        </div>
                                        <div class="col-9 col-sm-8 col-md-8 col-lg-9">
                                            <h6>Pilih Nominal Top-Up</h6>
                                            <p>Tentukan nominal top-up yang Anda inginkan. Kami menyediakan berbagai
                                                pilihan nominal
                                                untuk memenuhi kebutuhan Anda, mulai dari jumlah kecil hingga besar.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                    <div class="row">
                                        <div class="col-3 col-sm-4 col-md-4 col-lg-3 text-center">
                                            <img src="{{ asset('storage/img/flat-icon/payment-method.png') }}" />
                                            <h1>03</h1>
                                        </div>
                                        <div class="col-9 col-sm-8 col-md-8 col-lg-9">
                                            <h6>Lakukan Pembayaran</h6>
                                            <p>Pilih metode pembayaran yang Anda inginkan. Kami menerima berbagai
                                                metode pembayaran,
                                                termasuk kartu kredit, transfer bank, dan e-wallet. Pastikan semua
                                                informasi yang Anda
                                                masukkan sudah benar sebelum melanjutkan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 p-3">
                                    <div class="row">
                                        <div class="col-3 col-sm-4 col-md-4 col-lg-3 text-center">
                                            <img src="{{ asset('storage/img/flat-icon/startup.png') }}" />
                                            <h1>04</h1>
                                        </div>
                                        <div class="col-9 col-sm-8 col-md-8 col-lg-9">
                                            <h6>Voucher Dikirim Secara Instan</h6>
                                            <p>Setelah pembayaran berhasil, voucher game akan langsung dikirim ke
                                                akun Anda. Anda akan
                                                menerima notifikasi melalui aplikasi dan email. Voucher siap
                                                digunakan untuk
                                                meningkatkan pengalaman bermain game Anda.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                    <div class="card shadow-sm rounded-lg mb-3">
                        <div class="card-body">
                            <label class="h5 text-body mb-3">
								<span class="badge badge-primary font-weight-bold p-2 rounded-lg mr-1"
                                    style="font-size: 15px;">
									01
								</span> 
								Masukkan Informasi Akun
							</label>
							<button type="button" class="btn btn-link btn-sm text-primary font-weight-bold px-2">
								<i class="fa fa-info-circle" aria-hidden="true"></i> Panduan
							</button>
							@if ($data->jumlah_input == 2)
								<div class="row">
									<div class="col-md-6">
										<input type="number" id="id-game" class="form-control rounded-lg form-control-md g-mb-10" placeholder="Masukkan Zone ID {{ $data->nama_brand }} Anda" x-model.number="informasiAkun">
									</div>
									<div class="col-md-6">
										<input type="number" id="id-game" class="form-control rounded-lg form-control-md g-mb-10" placeholder="Masukkan User ID {{ $data->nama_brand }} Anda" x-model.number="informasiAkun">
									</div>
								</div>
							@else
								<input type="number" id="id-game" class="form-control rounded-lg form-control-md g-mb-10" placeholder="Masukkan User ID {{ $data->nama_brand }} Anda" x-model.number="informasiAkun">
							@endif
                            <p id="masukkan-informasi-akun" class="form-text text-muted mb-1">
                                {{ $data->keterangan }}
                            </p>
                        </div>
                    </div>
                    <div class="card shadow-sm rounded-lg mb-3">
                        <div class="card-body">
                            <label class="h5 text-body mb-3"><span
                                    class="badge badge-primary font-weight-bold p-2 rounded-lg mr-1"
                                    style="font-size: 15px;">02</span> Pilih Nominal Top
                                Up</label>
                            <div class="container">
                                <div class="row">
									@forelse ($items as $item)
										<div class="col-6 col-sm-6 col-md-4 col-lg-4 p-2">
											<div class="card-nominal card shadow-sm rounded-lg border" data-item-id="{{ $item->id }}">
												<div class="card-body text-left p-3">
													<img src="{{ asset('storage/img/flat-icon/diamond_game.png') }}" />
													<h5 class="card-title mb-0 mt-2">{{ $item->nama_custom_item }}</h5>
												</div>
												<div class="card-footer text-muted">
													<span class="text-primary font-weight-bold">{{ formatRupiah($item->modal + $item->profit) }}</span>
												</div>
											</div>
										</div>
									@empty
										<div class="col-6 col-sm-6 col-md-4 col-lg-4 p-2">
											<div class="card shadow-sm rounded-lg border">
												<div class="card-body text-left p-3">
													<h5 class="card-title mb-0 mt-2">Belum Ada Data</h5>
												</div>
											</div>
										</div>
									@endforelse
								</div>
								
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm rounded-lg mb-3">
                        <div class="card-body">
                            <label class="h5 text-body mb-3"><span
                                    class="badge badge-primary font-weight-bold p-2 rounded-lg mr-1"
                                    style="font-size: 15px;">03</span> Masukkan Kode Promo</label>
                            <input type="text" id="id-game" class="form-control rounded-lg form-control-md g-mb-10"
                                placeholder="Masukkan Kode Promo (Opsional)" x-model="kodePromo">
                        </div>
                    </div>
                    <div class="card shadow-sm rounded-lg mb-3">
                        <div class="card-body">
                            <label class="h5 text-body mb-3">
                                <span class="badge badge-primary font-weight-bold p-2 rounded-lg mr-1"
                                    style="font-size: 15px;">04</span>
                                Pilih Metode Pembayaran
                            </label>
                            <div class="container">
                                <div class="row justify-content-center">
									@forelse ($pembayaran as $item)
										<div class="col-md-3 col-sm-6 p-2">
											<div class="card-wrapper">
												<input type="radio" class="radio-input" name="metode" id="metode{{ $loop->index }}" value="{{ $item->id }}">
												<label for="metode{{ $loop->index }}" class="card shadow-sm rounded-lg border pembayaran">
													<div class="card-body text-left p-3">
														<img src="{{ asset('images/metode-pembayaran-logo/' . $item->logo) }}" />
														<h5 class="card-title mb-0 mt-3 text-left">{{ $item->nama_metode }}</h5>
													</div>
												</label>
											</div>
										</div>
									@empty
										<!-- Handle empty case -->
									@endforelse
								</div>															
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm rounded-lg mb-3">
                <div class="card-body">
                    <label class="h5 text-body mb-3"><span
                            class="badge badge-primary font-weight-bold p-2 rounded-lg mr-1"
                            style="font-size: 15px;">05</span> Masukkan
                        Informasi Kontak</label>
                    <input type="text" id="id-game" class="form-control rounded-lg form-control-md g-mb-10"
                        placeholder="Masukkan Email (opsional)" x-model="informasiKontak">
                    <p id="masukkan-informasi-akun" class="form-text text-muted mb-1">
                        Masukkan detail ini untuk mendapatkan bukti transaksi.
                    </p>
                </div>
            </div>
            <div class="card fixed-bottom">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-4">
                                <div class="media">
                                    <img src="{{ asset('images/brand-logo/' . $data->logo) }}"
                                        class="align-self-center rounded-lg mr-3 d-none d-sm-block"
                                        style="height: 64px;" alt="..." x-on:click="calculateTotalHarga()">
                                    <div class="media-body">
                                        <h6 class="my-0">{{ $data->nama_brand }}</h6>
                                        <h5 class="mt-0 text-primary" id="totalHarga"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-md-4 text-sm-left text-right">
                                <p class="my-2 h6" x-text="`${nominalTopup}`"></p>
                                <img x-bind:src="logoPembayaran[metodePembayaran]" style="height:20px;" />
                            </div>
                            <input type="hidden" id="hargaInput" name="harga">
                            <input type="hidden" id="metodePembayaranInput" name="metode_pembayaran">
                            <div class="col-12 col-sm-12 col-md-4">
                                <button type="button" class="btn btn-primary btn-rounded btn-block my-2"
                                    data-toggle="modal" data-target="#exampleModal"><i
                                        class="fa fa-rocket align-middle mr-1"></i> Bayar Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade pr-0" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">
                                <label class="h5 text-body mb-0"><span
                                        class="badge badge-primary font-weight-bold p-2 rounded-lg mr-1"
                                        style="font-size: 15px;">05</span> Konfirmasi Pembelian</label></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="container-md my-3">
                                <div class="card shadow-none">
                                    <div class="row no-gutters">
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3">
                                            <img src="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75"
                                                class="rounded-lg" alt="...">
                                        </div>
                                        <div class="col-9 col-sm-9 col-md-9 col-lg-9">
                                            <div class="card-body py-0 px-3">
                                                <h5 class="card-title text-uppercase mb-0">Informasi Akun</h5>
                                                <div class="row my-2">
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8">Nickname</div>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 font-weight-bold"
                                                        x-text="informasiAkun">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8">ID Game</div>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 font-weight-bold"
                                                        x-text="informasiAkun">
                                                    </div>
                                                </div>
                                                <div class="row my-2">
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8">Email</div>
                                                    <div class="col-12 col-sm-8 col-md-8 col-lg-8 font-weight-bold"
                                                        x-text="informasiKontak">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Table -->
                                        <div class="table-responsive">
                                            <table class="table my-4 rounded-lg">
                                                <thead>
                                                    <tr>
                                                        <th class="bg-transparent border-top-0">
                                                            <span class="font-14">Keterangan</span>
                                                        </th>
                                                        <th class="bg-transparent border-top-0 text-right">
                                                            <span class="font-14">Biaya</span>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="font-weight-lighter">
                                                            <p class="my-0">Nominal Top Up</p><span x-text="`${nominalTopup} Diamond`"></span>
                                                        </td>
                                                        <td class="text-right font-weight-bold" x-text="itemHargaTopup">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-lighter">
                                                            <p class="my-0">Kode Promo</p>
                                                            <span class="badge badge-success" x-text="kodePromo"></span>
                                                        </td>
                                                        <td class="text-right font-weight-bold">
                                                            -Rp100,-
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="font-weight-lighter">
                                                            <p class="my-0">Metode Pembayaran</p>
                                                        </td class="font-weight-lighter">
                                                        <td class="text-right font-weight-bold">
                                                            <img x-bind:src="logoPembayaran[metodePembayaran]"
                                                                style="height:25px;" />
                                                        </td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <td class="border-top border-top-2">
                                                            <strong>Total Pembayaran</strong>
                                                        </td>
                                                        <td colspan="2" class="text-right border-top border-top-2">
                                                            <span class="font-20" id="totalHarga2">
                                                                -
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!-- Title -->
                                        <h6 class="text-uppercase my-0">
                                            Catatan
                                        </h6>

                                        <!-- Text -->
                                        <p class="text-muted my-0">
                                            Pastikan data yang Anda masukkan sudah lengkap dan benar untuk
                                            menghindari kesalahan transaksi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary btn-rounded "
                                    data-dismiss="modal">Batal</button>
                                <button type="sumbit" class="btn btn-primary btn-rounded ">Konfirmasi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
	<style>
		.selected-card {
			border: 2px solid #007bff; /* Border warna primary */
		}
	</style>
    @endpush
    @push('scripts')
    <script>
		$(document).ready(function() {
			$('.card-nominal').click(function() {
				// Hapus kelas selected-card dari semua kartu
				$('.card-nominal').removeClass('selected-card');
				$('.card-nominal').addClass('border');

				// Tambahkan kelas selected-card ke kartu yang dipilih
				$(this).removeClass('border');
				$(this).addClass('selected-card');

				// Anda bisa menambahkan tindakan lain di sini, seperti mengatur nilai input tersembunyi, dll.
				// Misalnya:
				// $('#selectedItem').val($(this).data('item-id'));
			});
		});
        function calculateTotalHarga() {
            let harga = document.getElementById('hargaInput').value;
            let kodePembayaran = document.getElementById('metodePembayaranInput').value;
            $.ajax({
                url: "/api/total-harga",
                type: 'GET',
                data: {
                    harga: harga,
                    kodePembayaran: kodePembayaran
                },
                async: false,
                dataType: 'json',
                success: function (response) {
                    $('#totalHarga').text(response);
                    $('#totalHarga2').text(response);
                }
            });
        }
        $(document).ready(function () {
            $('.nominal').click(function () {
                var value = $(this).data('value');
                $('#diamond' + value).prop('checked', true);
                $('.nominal').removeClass('border-primary');
                $(this).addClass('border-primary');
            });
        });
        $(document).ready(function () {
            var footerTop = $('#footer-top').offset().top;
            var $fixedBottom = $('.fixed-bottom');

            $(window).on('scroll', function () {
                var scrollPosition = $(this).scrollTop() + $(window).height();
                if (scrollPosition >= footerTop) {
                    $fixedBottom.hide();
                } else {
                    $fixedBottom.show();
                }
            });
        });

    </script>
    @endpush
</x-guest-layout>
