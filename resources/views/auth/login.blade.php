@section('title', 'Masuk untuk')
@section('description', 'Masuk untuk melihat riwayat transaksi kamu dengan mudah dan cepat. Pantau semua transaksi di satu tempat dengan akses yang nyaman dan cepat.')
<x-auth-layout>
    <!-- Logo -->
    <div class="text-center">
        <img class="mb-3" src="{{ asset('storage/img/masuk/masuk-topup-teamkito-id.png') }}" alt="{{ asset('storage/img/masuk/masuk-topup-teamkito-id.png') }}" class="mt-8" style="width: 300px">
    </div>
    
    <div class="form-group">
        <a class="btn btn-primary btn-rounded btn-block align-middle" href="{{ route('oauth.google') }}">
            <x-google-logo class="mr-1"/> 
            Masuk dengan Google 
        </a>
    </div>
    <hr class="mt-4 mb-4">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form method="POST" action="#">
        @csrf
        <div class="form-group">
            <x-input-label for="emailaddress" :value="__('Email')" />
            <x-text-input id="emailaddress" class="login" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Masukkan email Anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="password" :value="__('Kata Sandi')" />
            <x-text-input id="password" class="login" type="password" name="password" required autocomplete="current-password" placeholder="Masukkan kata sandi Anda" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="form-group d-flex justify-content-between align-items-center mb-3">
            <div class="checkbox d-inline mb-0">
                <input type="checkbox" name="ingat_saya" id="ingat-saya">
                <label for="ingat-saya" class="cr mb-0 font-13">Ingat saya</label>
            </div>
            <span>
                @if (Route::has('password.request'))
                    <a class="font-12" href="{{ route('password.request') }}">Lupa kata sandi Anda?</a>
                @endif
            </span>
        </div>

        <div class="form-group mb-0">
            <x-primary-button class="btn-rounded ms-3">
                {{ __('Masuk') }}
            </x-primary-button>
        </div>

        <div class="text-center mt-15"><span class="mr-2 font-12">Belum punya akun?</span><a class="font-12" href="{{ route('register') }}">Daftar sekarang</a></div>

    </form>
</x-auth-layout>
