@section('title', 'Free Fire (FF)')
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
            <li class="breadcrumb-item"><a href="{{ route("beranda") }}">Top Up</a></li>
            <li class="breadcrumb-item active" aria-current="page">Free Fire</li>
        </ol>
    </nav>
    <section id="proses-topup" x-data="{ informasiAkun: '', nominalTopup: 0, kodePromo: '', informasiKontak: '', metodeBayar: '', iconUrl: '' }">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-5 col-lg-5">
					<img class="shadow-sm rounded-lg mb-3"
						src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/ID-HB-Flashsale-exorcist.png?tr=w-828%2Cq-75"
						alt="Slide 1" />

					<div id="langkah-topup"
						class="mt-5 d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
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
											<h5>Pilih Game</h5>
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
							<label class="h5 text-body mb-3"><span
									class="badge badge-primary font-weight-bold p-2 rounded-lg mr-1"
									style="font-size: 15px;">01</span> Masukkan
								Informasi Akun</label><button type="button"
								class="btn btn-link btn-sm text-primary font-weight-bold px-2"><i
									class="fa fa-info-circle" aria-hidden="true"></i> Panduan</button>
							<input type="number" id="id-game"
								class="form-control rounded-lg form-control-md g-mb-10"
								placeholder="Masukkan Game ID Free Fire Anda" x-model.number="informasiAkun">
							<p id="masukkan-informasi-akun" class="form-text text-muted mb-1">
								Tap avatar di sudut kiri atas. ID Game muncul di bawah nama.
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
									<div class="col-6 col-sm-6 col-md-4 col-lg-4 p-2">
										<div class="card shadow-sm rounded-lg nominal border" data-value="100">
											<input type="radio" class="radio-input" name="diamond" id="diamond100"
												value="100" x-model.number="nominalTopup">
											<div class="card-body text-left p-3">
												<img src="{{ asset('storage/img/flat-icon/diamond_game.png') }}" />
												<h5 class="card-title mb-0 mt-2">100 Diamond</h5>
											</div>
											<div class="card-footer text-muted">
												<span class="text-primary font-weight-bold">Rp10.000,- </span>
											</div>
										</div>
									</div>
									<div class="col-6 col-sm-6 col-md-4 col-lg-4 p-2">
										<div class="card shadow-sm rounded-lg nominal border" data-value="200">
											<input type="radio" class="radio-input" name="diamond" id="diamond200"
												value="200" x-model.number="nominalTopup">
											<div class="card-body text-left p-3">
												<img src="{{ asset('storage/img/flat-icon/diamond_game.png') }}" />
												<h5 class="card-title mb-0 mt-2">200 Diamond</h5>
											</div>
											<div class="card-footer text-muted font-weight-lighter">
												<span class="text-primary font-weight-bold">Rp20.000,-</span>
											</div>
										</div>
									</div>
									<div class="col-6 col-sm-6 col-md-4 col-lg-4 p-2">
										<div class="card shadow-sm rounded-lg nominal border" data-value="500">
											<input type="radio" class="radio-input" name="diamond" id="diamond500"
												value="500" x-model.number="nominalTopup">
											<div class="card-body text-left p-3">
												<img src="{{ asset('storage/img/flat-icon/diamond_game.png') }}" />
												<h5 class="card-title mb-0 mt-2">500 Diamond</h5>
											</div>
											<div class="card-footer text-muted font-weight-lighter">
												<span class="text-primary font-weight-bold">Rp50.000,-</span>
											</div>
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
								<h5>Virtual Account</h5>
								<div class="row">
									@forelse ($data['data'] as $item)
										@if ($item['group'] == 'Virtual Account')
											<div class="col-md-3 col-sm-6 p-2">
												<div class="card shadow-sm rounded-lg border pembayaran" data-value="{{ $item['fee_customer']['flat'] }}">
													<input type="radio" class="radio-input" name="metode" id="metode100"
														value="{{ $item['fee_customer']['flat'] }}" x-model="metodeBayar">
													<div class="card-body text-left p-3">
														<img src="{{ $item['icon_url'] }}" style="height: 50px !important;" />
														{{-- <h5 class="card-title mb-0 mt-3 text-left">Biaya Layanan :
															Rp.{{ $item['total_fee']['flat'] }}</h5> --}}
													</div>
												</div>
											</div>
										@endif
									@empty

									@endforelse
								</div>
								<br>
								<h5>Minimarket</h5>
								<div class="row">
									@forelse ($data['data'] as $item)
										@if ($item['group'] == 'Convenience Store')
											<div class="col-md-3 col-sm-6 p-2">
												<div class="card shadow-sm rounded-lg border pembayaran" data-value="{{ $item['fee_customer']['flat'] }}">
													<input type="radio" class="radio-input" name="metode" id="metode100"
														value="{{ $item['fee_customer']['flat'] }}" x-model="metodeBayar">
													<div class="card-body text-left p-3">
														<img src="{{ $item['icon_url'] }}" style="height: 50px !important;" />
														{{-- <h5 class="card-title mb-0 mt-3 text-left">Biaya Layanan :
															Rp.{{ $item['total_fee']['flat'] }}</h5> --}}
													</div>
												</div>
											</div>
										@endif
									@empty

									@endforelse
								</div>
								<br>
								<h5>Dompet Digital</h5>
								<div class="row">
									@forelse ($data['data'] as $item)
										@if ($item['group'] == 'E-Wallet')
											<div class="col-md-3 col-sm-6 p-2">
												<div class="card shadow-sm rounded-lg border pembayaran" data-value="{{ $item['fee_customer']['flat'] }}">
													<input type="radio" class="radio-input" name="metode" id="metode100"
														value="{{ $item['fee_customer']['flat'] }}" x-model="metodeBayar">
													<div class="card-body text-left p-3">
														<img src="{{ $item['icon_url'] }}" style="height: 50px !important;" />
														{{-- <h5 class="card-title mb-0 mt-3 text-left">Biaya Layanan :
															Rp.{{ $item['total_fee']['flat'] }}</h5> --}}
													</div>
												</div>
											</div>
										@endif
									@empty

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
									<img src="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75"
										class="align-self-center rounded-lg mr-3 d-none d-sm-block"
										style="height: 64px;" alt="...">
									<div class="media-body">
										<h6 class="my-0">Free Fire</h6>
										<h5 class="mt-0 text-primary">Rp10.000,-</h5>
									</div>
								</div>
							</div>
							<div class="col-6 col-sm-6 col-md-4 text-sm-left text-right">
								<p class="my-2 h6" x-text="`${nominalTopup} Diamond`"></p>
								<img src="https://www.lapakgaming.com/static/images/payment-methods/dana.webp?w=96&q=75"
									style="height:20px;" />
							</div>
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
															<p class="my-0">Nominal Top Up</p>100 Diamond
														</td>
														{{-- <td class="text-right font-weight-bold"
															x-text="nominalTopup"></td> --}}
													</tr>
													<tr>
														<td class="font-weight-lighter">
															<p class="my-0">Kode Promo</p>
															<span class="badge badge-success"
																x-text="kodePromo"></span>
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
															<img src="https://www.lapakgaming.com/static/images/payment-methods/dana.webp?w=96&q=75"
																style="height:25px;" />
														</td>
													</tr>
													<tr class="bg-light">
														<td class="border-top border-top-2">
															<strong>Total Pembayaran</strong>
														</td>
														<td colspan="2" class="text-right border-top border-top-2">
															<span class="font-20">
																Rp30.0000,-
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
								<button type="button" class="btn btn-secondary btn-rounded " data-dismiss="modal">Batal</button>
								<button type="sumbit" class="btn btn-primary btn-rounded ">Konfirmasi</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </section>
    <section id="penawaran-eksklusif" class="mt-5">
        <label class="font-weight-bold h4 text-body"><img src="{{ asset('storage/img/flat-icon/discount.png') }}"
                class="mr-2" /> Penawaran Eksklusif untuk Anda</label>
        <div class="container">
            <div class="row">
                <div class="card-deck-wrapper my-3">
                    <div class="card-deck">
                        <div class="card shadow-sm rounded-lg mb-20">
                            <img class="card-img-top img-fluid"
                                src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/ID-HB-Flashsale-exorcist.png?tr=w-828%2Cq-75"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title h5 mb-0">Mobile Legends</h5>
                                <p class="card-text">
                                    <h6 class="font-weight-bold"><span class="badge badge-danger">10%</span> Rp98.000,-
                                        <del class="text-muted">Rp100.000</del></h6>
                                </p>
                                <div class="info">
                                    <div class="progress mb-20 progress-sm">
                                        <div class="progress-bar" role="progressbar" style="width: 30%;"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avatar-area">
                                            <div class="img-group">
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Smith Jones"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="David jhon"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Jhon Henry"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Smith"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"></a>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">Sisa Kuota Diskon 70%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-sm rounded-lg mb-20">
                            <img class="card-img-top img-fluid"
                                src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/ID-HB-Flashsale-exorcist.png?tr=w-828%2Cq-75"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title h5 mb-0">Free Fire</h5>
                                <p class="card-text">
                                    <h6 class="font-weight-bold"><span class="badge badge-danger">10%</span> Rp98.000,-
                                        <del class="text-muted">Rp100.000</del></h6>
                                </p>
                                <div class="info">
                                    <div class="progress mb-20 progress-sm">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 60%;"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avatar-area">
                                            <div class="img-group">
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Smith Jones"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="David jhon"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Jhon Henry"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Smith"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"></a>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">Sisa Kuota Diskon 40%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow-sm rounded-lg mb-20">
                            <img class="card-img-top img-fluid"
                                src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/ID-HB-Flashsale-exorcist.png?tr=w-828%2Cq-75"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title h5 mb-0">PUBG Mobile</h5>
                                <p class="card-text">
                                    <h6 class="font-weight-bold"><span class="badge badge-danger">10%</span> Rp98.000,-
                                        <del class="text-muted">Rp100.000</del></h6>
                                </p>
                                <div class="info">
                                    <div class="progress mb-20 progress-sm">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 90%;"
                                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="avatar-area">
                                            <div class="img-group">
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Smith Jones"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="David jhon"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Jhon Henry"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"> </a>
                                                <a class="user-avatar user-avatar-group" href="#" data-toggle="tooltip"
                                                    data-placement="top" title="" data-original-title="Smith"><img
                                                        src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                                        alt="user" class="rounded-circle"></a>
                                            </div>
                                        </div>
                                        <h6 class="mb-0">Sisa Kuota Diskon 10%</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pendapat-pelanggan" class="mt-5">
        <label class="font-weight-bold h4 text-body">Pendapat Pelanggan Teamkito</label>
        <p class="text-muted">
            Baca ulasan dari pelanggan yang puas dengan layanan kami. Temukan bagaimana top-up voucher game di platform
            kami telah membantu mereka menikmati permainan favorit mereka tanpa hambatan.
        </p>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 p-2">
                    <div class="card shadow-sm rounded-lg">
                        <div class="card-body">
                            <ul class="list-inline mb-2 product-review">
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                            </ul>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content....</p>
                            <hr>
                            <div class="row">
                                <div class="col-2 col-sm-2 pr-1">
                                    <img src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                        class="user-avatar rounded-circle" alt="" width="40" height="40" />
                                </div>
                                <div class="col-10 col-sm-10 pl-1">
                                    <h6 class="card-title mb-0">Iit Pranata</h6>
                                    <p class="card-subtitle mb-2 text-muted">Ketua Guild Teamkito</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 p-2">
                    <div class="card shadow-sm rounded-lg">
                        <div class="card-body">
                            <ul class="list-inline mb-2 product-review">
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                            </ul>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content....</p>
                            <hr>
                            <div class="row">
                                <div class="col-2 col-sm-2 pr-1">
                                    <img src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                        class="user-avatar rounded-circle" alt="" width="40" height="40" />
                                </div>
                                <div class="col-10 col-sm-10 pl-1">
                                    <h6 class="card-title mb-0">Iit Pranata</h6>
                                    <p class="card-subtitle mb-2 text-muted">Ketua Guild Teamkito</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4 p-2">
                    <div class="card shadow-sm rounded-lg">
                        <div class="card-body">
                            <ul class="list-inline mb-2 product-review">
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star text-primary"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star-o text-primary"></i></li>
                            </ul>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content....</p>
                            <hr>
                            <div class="row">
                                <div class="col-2 col-sm-2 pr-1">
                                    <img src="https://storage.googleapis.com/tokogame-img/products/free-fire-20240424.png"
                                        class="user-avatar rounded-circle" alt="" width="40" height="40" />
                                </div>
                                <div class="col-10 col-sm-10 pl-1">
                                    <h6 class="card-title mb-0">Iit Pranata</h6>
                                    <p class="card-subtitle mb-2 text-muted">Ketua Guild Teamkito</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="topup-teamkito" class="mt-5">
        <div class="card shadow-sm rounded-lg">
            <div class="card-body p-4">
                <label class="font-weight-bold h4 text-body"><img
                        src="{{ asset('storage/img/flat-icon/verified.png') }}" /> Top Up Teamkito ID</label>
                <h6>Top Up Game Murah dan Cepat di topup.teamkito.id</h6>
                <p class="text-muted mb-0">
                    Situs resmi yang berdedikasi untuk memberikan pengalaman top up game yang mudah, cepat, dan
                    terjangkau bagi para gamer di Indonesia. Situs ini beroperasi dengan lisensi dan peraturan yang
                    sesuai dengan hukum yang berlaku di Indonesia dan berkomitmen untuk menjaga transparansi dan
                    integritas dalam setiap transaksi. Top Up Teamkito ID juga bekerja sama dengan penyedia game resmi
                    untuk menyediakan layanan top up yang sah dan terpercaya. Keamanan data pengguna dijaga dengan
                    teknologi enkripsi terbaru dan tim layanan pelanggan siap membantu dengan pertanyaan atau masalah
                    yang mungkin dihadapi pengguna.
                </p>
            </div>
        </div>
    </section>

    @push('styles')
    <style>
        .nominal {
            cursor: pointer;
        }

        .nominal:hover {
            background-color: #f8f9fa;
        }

        .radio-input {
            display: none;
        }

    </style>
    @endpush
    @push('scripts')
    <script>
        $(document).ready(function () {
            $('.nominal').click(function () {
                var value = $(this).data('value');
                $('#diamond' + value).prop('checked', true);
                $('.nominal').removeClass('border-primary');
                $(this).addClass('border-primary');
            });
        });
        $(document).ready(function () {
            $('.pembayaran').click(function () {
                var value = $(this).data('value');
                $('#metode' + value).prop('checked', true);
                $('.pembayaran').removeClass('border-primary');
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
