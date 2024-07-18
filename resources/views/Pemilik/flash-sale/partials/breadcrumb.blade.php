@if ($tipe == 'index')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item active" aria-current="page">Flash Sale</li>
	</ol>
</nav>
<div class="overflow-posisi-x mb-1">
	<a href="{{ route('flash-sale') }}" class="btn @if(Request::segment(3) == '') btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">Semua</a>
	@foreach ($produk as $item)
		<a href="{{ route('flash-sale.produk', ['produkSlug' => $item->slug]) }}" class="btn @if(Request::segment(3) == $item->slug) btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">{{ $item->nama_produk }}</a>
	@endforeach
</div>
@endif

@if ($tipe == 'produk')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('flash-sale') }}">Flash Sale</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{ $itemProduk->nama_produk }}</li>
	</ol>
</nav>
<div class="overflow-posisi-x mb-1">
	<a href="{{ route('flash-sale') }}" class="btn @if(Request::segment(5) == '') btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">Semua</a>
	@foreach ($kategori as $item)
		<a href="{{ route('flash-sale.kategori', ['produkSlug' => $itemProduk->slug, 'kategoriSlug' => $item->slug]) }}" class="btn @if(Request::segment(3) == $item->slug) btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">{{ $item->nama_kategori }}</a>
	@endforeach
</div>
@endif

@if ($tipe == 'kategori')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('flash-sale') }}">Flash Sale</a></li>
		<li class="breadcrumb-item"><a href="{{ route('flash-sale.produk', ['produkSlug' => $itemProduk->slug]) }}">{{ $itemProduk->nama_produk }}</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{ $itemKategori->nama_kategori }}</li>
	</ol>
</nav>
<div class="overflow-posisi-x mb-1">
	<a href="{{ route('flash-sale.produk', ['produkSlug' => $itemProduk->slug]) }}" class="btn @if(Request::segment(7) == '') btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">Semua</a>
	@foreach ($brand as $item)
		<a href="{{ route('flash-sale.brand', ['produkSlug' => $itemProduk->slug, 'kategoriSlug' => $itemKategori->slug, 'brandSlug' => $item->slug]) }}" class="btn @if(Request::segment(7) == $item->slug) btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">{{ $item->nama_brand }}</a>
	@endforeach
</div>
@endif

@if ($tipe == 'brand')
<nav aria-label="breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{ route('flash-sale') }}">Flash Sale</a></li>
		<li class="breadcrumb-item"><a href="{{ route('flash-sale.produk', ['produkSlug' => $itemProduk->slug]) }}">{{ $itemProduk->nama_produk }}</a></li>
		<li class="breadcrumb-item"><a href="{{ route('flash-sale.kategori', ['produkSlug' => $itemProduk->slug, 'kategoriSlug' => $itemKategori->slug]) }}">{{ $itemKategori->nama_kategori }}</a></li>
		<li class="breadcrumb-item active" aria-current="page">{{ $itemBrand->nama_brand }}</li>
	</ol>
</nav>
<div class="overflow-posisi-x mb-1">
	<a href="{{ route('flash-sale.kategori', ['produkSlug' => $itemProduk->slug, 'kategoriSlug' => $itemKategori->slug]) }}" class="btn @if(Request::segment(7) == '') btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">Semua</a>
	@foreach ($brand as $item)
		<a href="{{ route('flash-sale.brand', ['produkSlug' => $itemProduk->slug, 'kategoriSlug' => $itemKategori->slug, 'brandSlug' => $item->slug]) }}" class="btn @if(Request::segment(7) == $item->slug) btn-dark @else btn-outline-secondary @endif btn-rounded btn-sm mb-3 mr-1">{{ $item->nama_brand }}</a>
	@endforeach
</div>
@endif