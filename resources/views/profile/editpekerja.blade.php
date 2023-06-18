<x-app-layout>
    @section('title')
        <title>Edit Profile - myPRT</title>
    @endsection

    @section('laman')
        <h1><b> Profil</b> </h1>
    @endsection

    @section('css')
        <style>
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }
        </style>
    @endsection

    @section('konten')
        <div class="container mt-5" style="background-color: white; width: 400px; border-radius: 20px; height: 70px;  ">
            <div class="mb-4" style="text-align: left; margin-top: -70px;">
                <img src="{{ asset('image/orang.png') }}" class="orang" width="70px" alt="">
            </div>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('pekerja.profile.update') }}" class="mt-6 space-y-6">
                @csrf
                @method('patch')

                <div>
                    <x-text-input id="name" name="name" type="text" class="w3-input mb-2" placeholder="Nama"
                        :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                </div>

                <div>
                    <x-text-input id="email" name="email" type="email" class="w3-input mb-2" :value="old('email', $user->email)" required
                        autocomplete="username" placeholder="Email" />
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                        <div>
                            <p class="text-sm mt-2 text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}

                                <button form="send-verification"
                                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                <div>
                    <x-text-input id="lokasi" name="lokasi" type="text" class="w3-input mb-2" :value="old('lokasi', $user->lokasi)" required
                        autocomplete="lokasi" placeholder="Lokasi" />
                    <x-input-error class="mt-2" :messages="$errors->get('lokasi')" />
                </div>

                <div>
                    <x-text-input id="tanggal_lahir" name="tanggal_lahir" type="date" class="w3-input mb-2"
                        placeholder="Tanggal Lahir" :value="old('tanggal_lahir', $user->tanggal_lahir)" required autocomplete="tanggal_lahir" />
                    <x-input-error class="mt-2" :messages="$errors->get('tanggal_lahir')" />
                </div>

                <div>
                    <x-text-input id="deskripsi" name="deskripsi" type="text" class="w3-input mb-2" placeholder="Deskripsi"
                        :value="old('deskripsi', $user->deskripsi)" required autocomplete="deskripsi" />
                    <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
                </div>

                <div>
                    <x-text-input id="gaji" name="gaji" type="number" class="w3-input mb-2" placeholder="Gaji"
                        :value="old('gaji', $user->gaji)" required autocomplete="gaji" />
                    <x-input-error class="mt-2" :messages="$errors->get('gaji')" />
                </div>

                <div class="form-group mt-4">
                    <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                        <button type="submit" class="btn w3-indigo"
                            style="background-color: #135589 !important; border-radius: 20px; width: 139px; margin :10px 0 25px ">{{ __('Simpan') }}</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="footer row" style="text-align: center;">
            <div class="col-md-3">
                <a href="">

                </a>
            </div>

            <div class="col-md-3">
                <a href="/pekerja/dashboard">
                    <i class="fa-solid fa-house" style="font-size: 35px; margin-top: 30px;"></i>
                </a>
            </div>

            <div class="col-md-3">
                <a href="/pekerja/profil">
                    <i class="fa-regular fa-user" style="font-size: 35px; margin-top: 30px"></i>
                </a>
            </div>

            <div class="col-md-3">
                <a href="">
                </a>
            </div>
        </div>
    @endsection
</x-app-layout>
