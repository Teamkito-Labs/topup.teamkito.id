<x-auth-layout>
    <div class="form-group">
        <a class="btn btn-primary btn-rounded btn-block align-middle" href="{{ route('oauth.google') }}">
            <x-google-logo class="mr-1"/> 
            Daftar dengan Google 
        </a>
    </div>
    <hr class="mt-4 mb-4">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <x-input-label for="nama" :value="__('Nama')" />
            <x-text-input id="nama" class="login" type="text" name="name" :value="old('nama')" required autofocus autocomplete="name" placeholder="Masukkan nama Anda" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="emailaddress" :value="__('Email')" />
            <x-text-input id="emailaddress" class="login" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" placeholder="Masukkan email Anda" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="password" :value="__('Kata Sandi')" />
            <x-text-input id="password" class="login" type="password" name="password" required autocomplete="new-password" placeholder="Masukkan kata sandi Anda" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="form-group">
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />
            <x-text-input id="password_confirmation" class="login" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Masukkan konfirmasi kata sandi Anda" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="form-group mt-4">
            <x-primary-button class="btn-rounded">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>

        <div class="text-center mt-15"><span class="mr-2 font-12">Sudah terdaftar?</span><a class="font-12" href="{{ route('login') }}">Login sekarang</a></div>

    </form>
</x-auth-layout>
