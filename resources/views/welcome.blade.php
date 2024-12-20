@section('title', '')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
@section('robots', 'index, follow')
<x-guest-layout>
    <section id="slide-ads-internal">
        <div class="owl-carousel">
            <div>
                <img class="rounded-lg"
                    src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/ID-HB-Flashsale-exorcist.png?tr=w-828%2Cq-75"
                    alt="Slide 1" />
            </div>
            <div>
                <img class="rounded-lg"
                    src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/Moonlightsales-Banner_724x260.webp?tr=w-828%2Cq-75"
                    alt="Slide 2" />
            </div>
            <div>
                <img class="rounded-lg"
                    src="https://www.lapakgaming.com/static/banner/lapakgaming/202405/Fafinal-Banner.png?tr=w-828%2Cq-75"
                    alt="Slide 3" />
            </div>
        </div>
    </section>
    <section id="menu-utama" class="mt-4">
        <label class="font-weight-bold h6 text-body">Menu Top Up</label>
        <div class="card rounded-lg shadow-sm ">
            <div class="card-body">
                <div class="container my-0 my-sm-3">
                    <nav aria-label="Navigasi Utama">
                        <ul class="row d-flex justify-content-between">
                            <li class="col text-center px-1">
								<a href="{{ route('beranda') }}" title="Game Populer">
									<img src="{{ asset('storage/img/flat-icon/trending.png') }}" />
                                    <h6 class="font-weight-lighter mt-2 mb-0">Populer</h6>
                                </a>
							</li>
                            <li class="col text-center px-1">
								<a href="{{ route('beranda.perangkat', ['perangkat' => 'mobile']) }}" title="Game Mobile">
									<img src="{{ asset('storage/img/flat-icon/smartphone.png') }}" />
                                    <h6 class="font-weight-lighter mt-2 mb-0">Mobile</h6>
                                </a>
							</li>
                            <li class="col text-center px-1">
								<a href="{{ route('beranda.perangkat', ['perangkat' => 'pc']) }}" title="Game PC">
									<img src="{{ asset('storage/img/flat-icon/computer-game.png') }}" />
                                    <h6 class="font-weight-lighter mt-2 mb-0">PC</h6>
                                </a>
							</li>
                            <li class="col text-center px-1">
								<a href="{{ route('beranda.perangkat', ['perangkat' => 'konsol']) }}" title="Game Konsol">
									<img src="{{ asset('storage/img/flat-icon/xbox.png') }}" />
                                    <h6 class="font-weight-lighter mt-2 mb-0">Konsol</h6>
                                </a>
							</li>
                            <li class="col text-center px-1 d-none d-sm-block ">
								<a href="{{ route('beranda') }}" title="Kupon Promo">
									<img src="{{ asset('storage/img/flat-icon/voucher.png') }}" />
                                    <h6 class="font-weight-lighter mt-2 mb-0">Kupon</h6>
                                </a>
							</li>
                            <li class="col text-center px-1 d-none d-sm-block">
								<a href="{{ route('beranda') }}" title="Butuh Bantuan">
									<img src="{{ asset('storage/img/flat-icon/help-desk.png') }}" />
                                    <h6 class="font-weight-lighter mt-2 mb-0">Bantuan</h6>
                                </a>
							</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="kumpulan-game" class="mt-5">
        <label class="font-weight-bold h4 text-body">
			@if ($tipe == 'Top Up Populer')
				<img src="{{ asset('storage/img/flat-icon/trending.png') }}" />
			@elseif ($tipe == 'Mobile')
				<img src="{{ asset('storage/img/flat-icon/smartphone.png') }}" />
			@elseif ($tipe == 'PC')
				<img src="{{ asset('storage/img/flat-icon/computer-game.png') }}" />
			@elseif ($tipe == 'Konsol')
				<img src="{{ asset('storage/img/flat-icon/xbox.png') }}" />
			@endif
			{{ $tipe }}
		</label>
        <div class="container">
            <div class="row justify-content-center">
				@forelse ($games as $item)
				<div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
				style="width: 11rem;">
					<a href="{{ route('proses-topup', ['gameSlug' => $item->slug]) }}">
						{{-- <div class="ribbon ribbon-bookmark ribbon-right ribbon-info">TERLARIS</div> --}}
						<img src="{{ asset('img/brand-logo/' . $item->logo) }}"
							class="card-img-top"
							alt="{{ asset('img/brand-logo/' . $item->logo) }}">
						<div class="card-body text-center align-middle p-2 p-sm-3">
							<h6 class="card-text">{{ $item->nama_brand }}</h6>
						</div>
					</a>
				</div>
				@empty
					
				@endforelse
                {{-- <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                    <img src="https://storage.googleapis.com/tokogame-img/products/mobile-legends-20240508.png"
                    class="card-img-top"
                    alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                <div class="card-body text-center align-middle p-2 p-sm-3">
                    <h6 class="card-text">Mobile Legends</h6>
                </div>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                        <img src="https://www.lapakgaming.com/static/images/category/pubg-mobile.webp?tr=w-256%2Cq-75"
                            class="card-img-top"
                            alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                        <div class="card-body text-center align-middle p-2 p-sm-3">
                            <h6 class="card-text">PUBG Mobile</h6>
                        </div>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                        
                    <img src="https://storage.googleapis.com/tokogame-img/products/honor-of-kings.png"
                    class="card-img-top"
                    alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                <div class="card-body text-center align-middle p-2 p-sm-3">
                    <h6 class="card-text">Honor Off Kings</h6>
                </div>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                        <img src="https://storage.googleapis.com/tokogame-img/products/honkai-star-rail.png"
                        class="card-img-top"
                        alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                    <div class="card-body text-center align-middle p-2 p-sm-3">
                        <h6 class="card-text">Honkai Star Rail</h6>
                    </div>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                        <img src="https://storage.googleapis.com/tokogame-img/products/valorant-promo.jpg"
                            class="card-img-top"
                            alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                        <div class="card-body text-center align-middle p-2 p-sm-3">
                            <h6 class="card-text">Valorant</h6>
                        </div>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                        <img src="https://storage.googleapis.com/tokogame-img/products/call-of-duty-mobile-20240424.png"
                            class="card-img-top"
                            alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                        <div class="card-body text-center align-middle p-2 p-sm-3">
                            <h6 class="card-text">Call Of Duty</h6>
                        </div>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                        <img src="https://storage.googleapis.com/tokogame-img/products/night-crows.webp"
                            class="card-img-top"
                            alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                        <div class="card-body text-center align-middle p-2 p-sm-3">
                            <h6 class="card-text">Night Crows</h6>
                        </div>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                        <img src="https://storage.googleapis.com/tokogame-img/products/black-clover-m.png"
                            class="card-img-top"
                            alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                        <div class="card-body text-center align-middle p-2 p-sm-3">
                            <h6 class="card-text">Black Clover</h6>
                        </div>
                    </a>
                </div>
                <div class="col-3 col-sm-3 col-md-2 col-lg-2 card shadow-sm rounded-lg m-2 m-sm-3 m-md-3 m-lg-3 px-0"
                    style="width: 11rem;">
                    <a href="http://">
                        <img src="https://storage.googleapis.com/tokogame-img/products/league-of-legends.png"
                            class="card-img-top"
                            alt="https://www.lapakgaming.com/static/images/category/free-fire.webp?tr=w-256%2Cq-75">
                        <div class="card-body text-center align-middle p-2 p-sm-3">
                            <h6 class="card-text">League Of Legends</h6>
                        </div>
                    </a>
                </div> --}}
            </div>
            <div class="text-center mt-4 mb-5">
                <a href="" class="h5 text-decoration-none font-weight-bold text-primary">TAMPIL LEBIH BANYAK</a>
            </div>
        </div>
    </section>
    <section id="langkah-topup" class="mt-5">
        <label class="font-weight-bold h4 text-body">Langkah Mudah Top Up Voucher Game di Teamkito</label>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-3">
                    <div class="row">
                        <div class="col-3 col-sm-4 col-md-4 col-lg-3 text-center">
                            <img src="{{ asset('storage/img/flat-icon/ghost.png') }}" />
                            <h1>01</h1>
                        </div>
                        <div class="col-9 col-sm-8 col-md-8 col-lg-9">
                            <h5>Pilih Game</h5>
                            <p>Pilih game yang ingin Anda Top Up dari daftar game yang tersedia. Kami menawarkan
                                berbagai game populer, baik untuk platform mobile maupun PC. Gunakan fitur pencarian
                                untuk menemukan game dengan cepat.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-3">
                    <div class="row">
                        <div class="col-3 col-sm-4 col-md-4 col-lg-3 text-center">
                            <img src="{{ asset('storage/img/flat-icon/diamond.png') }}" />
                            <h1 class="mb-0">02</h1>
                        </div>
                        <div class="col-9 col-sm-8 col-md-8 col-lg-9">
                            <h6>Pilih Nominal Top Up</h6>
                            <p>Tentukan nominal Top Up yang Anda inginkan. Kami menyediakan berbagai pilihan nominal
                                untuk memenuhi kebutuhan Anda, mulai dari jumlah kecil hingga besar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-3">
                    <div class="row">
                        <div class="col-3 col-sm-4 col-md-4 col-lg-3 text-center">
                            <img src="{{ asset('storage/img/flat-icon/payment-method.png') }}" />
                            <h1>03</h1>
                        </div>
                        <div class="col-9 col-sm-8 col-md-8 col-lg-9">
                            <h6>Lakukan Pembayaran</h6>
                            <p>Pilih metode pembayaran yang Anda inginkan. Kami menerima berbagai metode pembayaran,
                                termasuk kartu kredit, transfer bank, dan e-wallet. Pastikan semua informasi yang Anda
                                masukkan sudah benar sebelum melanjutkan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-3">
                    <div class="row">
                        <div class="col-3 col-sm-4 col-md-4 col-lg-3 text-center">
                            <img src="{{ asset('storage/img/flat-icon/startup.png') }}" />
                            <h1>04</h1>
                        </div>
                        <div class="col-9 col-sm-8 col-md-8 col-lg-9">
                            <h6>Voucher Dikirim Secara Instan</h6>
                            <p>Setelah pembayaran berhasil, voucher game akan langsung dikirim ke akun Anda. Anda akan
                                menerima notifikasi melalui aplikasi dan email. Voucher siap digunakan untuk
                                meningkatkan pengalaman bermain game Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
            integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite([
        'resources/css/welcome.css',
        ])
    @endpush
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
            integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function () {
                $(".owl-carousel").owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: false,
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        600: {
                            items: 2
                        }
                    }
                });
            });

        </script>
    @endpush
</x-guest-layout>
