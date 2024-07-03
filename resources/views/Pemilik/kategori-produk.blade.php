@section('title', 'Kategori Produk')
@section('description', 'Top Up game murah dan cepat di topup.teamkito.id! Dukung permainan Anda dengan Top Up untuk
Free Fire, Mobile Legends, PUBG Mobile, dan Genshin Impact. Proses instan!')
@section('keywords', 'Top Up game murah, Top Up game cepat, Top Up Free Fire murah, Top Up Mobile Legends cepat, Top Up
PUBG Mobile murah, Top Up Genshin Impact cepat, Top Up game online, Top Up game Indonesia, beli diamond Free Fire, beli
diamond Mobile Legends, Top Up UC PUBG murah, Top Up Genesis Crystal Genshin Impact, situs Top Up game terpercaya,
layanan Top Up game instan, Top Up game resmi, harga Top Up game terjangkau, Top Up game populer, Top Up game aman, top
up game mobile, Top Up game terbaik
')
<x-app-layout>
    <h3 class="card-title mb-4">Kategori Produk</h3>
    <div class="row">
        <div class="col-6 shadow-sm rounded-lg card height-card box-margin mx-0 px-0">
            <div class="card-body">
                <button type="button" class="btn btn-primary btn-rounded btn-sm align-middle mb-3" data-toggle="modal"
                    data-target="#exampleModal">
                    <i class="zmdi zmdi-plus align-middle"></i> Kategori
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <ul class="nav nav-tabs nav-bordered">
                                    <li class="nav-item">
                                        <a href="#produk-modal" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            Produk
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#kategori-modal" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            Kategori
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#merek-modal" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Merek
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#tipe-modal" data-toggle="tab" aria-expanded="false" class="nav-link">
                                            Tipe
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="produk-modal">
                                    </div>
                                    <div class="tab-pane" id="kategori-modal">
                                        <div class="row align-items-center">
                                            <div class="col-md-6 mb-sm-30">
                                                <p class="mb-0">2Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                                    enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu
                                                    pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi.
                                                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                                                    eleifend ac, enim.</p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="img/bg-img/bg-3.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="merek-modal">
                                        <p>3Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                            consequat massa quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                            pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                    <div class="tab-pane" id="tipe-modal">
                                        <p>4Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                                            consequat massa quis enim.</p>
                                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                                            pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs nav-bordered">
                    <li class="nav-item">
                        <a href="#produk" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            Produk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#kategori" data-toggle="tab" aria-expanded="true" class="nav-link">
                            Kategori
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#merek" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Merek
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#tipe" data-toggle="tab" aria-expanded="false" class="nav-link">
                            Tipe
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane show active" id="produk">
                        <div class="table-responsive">
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <thead class="bg-light">
                                        <tr>
                                            <th>#</th>
                                            <th><i class="ti-dropbox align-middle"></i> Keterangan</th>
                                            <th><i class="ti-link align-middle"></i> Slug</th>
                                            <th class="hidden-sm"><i class="ti-check-box align-middle"></i> Status</th>
                                            <th class="text-center"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Prabayar</td>
                                            <td class="hidden-sm">Otto</td>
                                            <td>@mdo</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-link btn-sm px-2 text-dark"><i
                                                        class="zmdi zmdi-edit"></i></button><button type="button"
                                                    class="btn btn-link btn-sm px-2 text-dark"><i
                                                        class="zmdi zmdi-delete"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pascabayar</td>
                                            <td class="hidden-sm">Thornton</td>
                                            <td>@fat</td>
                                            <td class="text-right">
                                                <button type="button" class="btn btn-link btn-sm px-2 text-dark"><i
                                                        class="zmdi zmdi-edit"></i></button><button type="button"
                                                    class="btn btn-link btn-sm px-2 text-dark"><i
                                                        class="zmdi zmdi-delete"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="kategori">
                        <div class="row align-items-center">
                            <div class="col-md-6 mb-sm-30">
                                <p class="mb-0">2Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In
                                    enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu
                                    pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi.
                                    Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae,
                                    eleifend ac, enim.</p>
                            </div>
                            <div class="col-md-6">
                                <img src="img/bg-img/bg-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="merek">
                        <p>3Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                            pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    </div>
                    <div class="tab-pane" id="tipe">
                        <p>4Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim.</p>
                        <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                            justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis
                            pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate
                            eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('styles')
    @endpush
    @push('scripts')
    @endpush
</x-app-layout>
