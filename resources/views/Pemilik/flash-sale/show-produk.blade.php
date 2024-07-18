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
    <h3 class="card-title mb-4"></h3>
	@includeIf('pemilik.flash-sale.partials.breadcrumb', ['tipe' => 'produk'])
    @include('pemilik.flash-sale.partials.table')
    <div class="fixed-bottom d-flex justify-content-end mb-4 mr-5">
        <a href="{{ route('flash-sale.tambah') }}" class="btn btn-primary btn-circle"><i class="fa fa-plus"></i></a>
    </div>
    @include('pemilik.flash-sale.partials.style')
    @include('pemilik.flash-sale.partials.script')
</x-app-layout>
