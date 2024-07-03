@section('title', 'Proses Pembayaran')
@section('description', 'Top up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan top up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'top up game murah, top up game cepat, top up Free Fire murah, top up Mobile Legends cepat, top up
PUBG Mobile murah, top up Genshin Impact cepat, top up game online, top up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, top up UC PUBG murah, top up Genesis Crystal Genshin Impact, situs top up game terpercaya,
layanan top up game instan, top up game resmi, harga top up game terjangkau, top up game populer, top up game aman, top
up game mobile, top up game terbaik
')
@section('robots', 'noindex, nofollow')
<x-guest-layout>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route("topup") }}">Free Fire</a></li>
            <li class="breadcrumb-item active" aria-current="page">#TUTK378247494729FF</li>
        </ol>
    </nav>
    <section id="proses-topup" x-data="{ informasiAkun: '', nominalTopup: '', kodePromo: '', metodePembayaran: '', informasiKontak: '' }">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7">
                    <div class="card shadow-sm rounded-lg mb-3">
                        <div class="card-body">
                            <label class="h5 text-body mb-3"><span
                                    class="badge badge-primary font-weight-bold p-2 rounded-lg mr-1"
                                    style="font-size: 15px;">01</span> Masukkan
                                Informasi Akun</label><button type="button"
                                class="btn btn-link btn-sm text-primary font-weight-bold px-2"><i
                                    class="fa fa-info-circle" aria-hidden="true"></i> Panduan</button>
                            <input type="number" id="id-game" class="form-control rounded-lg form-control-md g-mb-10"
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
                                        <div class="card shadow-sm rounded-lg border nominal" data-value="100">
                                            <input type="radio" class="radio-input" name="diamond" id="diamond100"
                                                value="100" x-model="nominalTopup">
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
                                        <div class="card shadow-sm rounded-lg border nominal" data-value="200">
                                            <input type="radio" class="radio-input" name="diamond" id="diamond200"
                                                value="200" x-model="nominalTopup">
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
                                        <div class="card shadow-sm rounded-lg border nominal" data-value="500">
                                            <input type="radio" class="radio-input" name="diamond" id="diamond500"
                                                value="500" x-model="nominalTopup">
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
                                <div class="row justify-content-center">
									<div class="col-md-6 p-2">
										<div class="card shadow-sm rounded-lg border pembayaran" data-value="100">
											<input type="radio" class="radio-input" name="metode" id="metode100" value="100"
												x-model="metodePembayaran">
											<div class="card-body text-left p-3">
												<img
													src="https://www.lapakgaming.com/static/images/payment-methods/dana.webp?w=96&q=75" />
												<h5 class="card-title mb-0 mt-2 text-left">Rp10.000,-</h5>
											</div>
										</div>
									</div>
									<div class="col-md-6 p-2">
										<div class="card shadow-sm rounded-lg border pembayaran" data-value="200">
											<input type="radio" class="radio-input" name="metode" id="metode200" value="200"
												x-model="metodePembayaran">
											<div class="card-body text-left p-3">
												<img
													src="https://www.lapakgaming.com/static/images/payment-methods/gopay.webp?w=96&q=75" />
												<h5 class="card-title mb-0 mt-2">Rp10.000,-</h5>
											</div>
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <img class="shadow-sm rounded-lg mb-3"
                        src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/ID-HB-Flashsale-exorcist.png?tr=w-828%2Cq-75"
                        alt="Slide 1" />
                    <div id="langkah-topup" class="mt-5 d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
                        <label class="font-weight-bold h4 text-body">Langkah Mudah Top-Up Voucher Game di Teamkito</label>
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
    @endpush
    @push('scripts')
    @endpush
</x-guest-layout>
