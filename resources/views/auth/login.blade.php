<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <h1 class="text-5xl font-bold text-center" style="color: white; margin:100px 0 55px">myPRT</h1>

    <div class="container" style="padding: 0 20px">
        <div class="container m-auto"
            style="background-color: white;  width: 294px; border-radius: 20px; padding-top:30px">
            <h2 class="text-4xl font-bold text-center">Masuk</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mt-4">
                    <x-text-input id="email" class="w3-input block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">

                    <x-text-input id="password" class="w3-input block mt-1 w-full" type="password" name="password"
                        required autocomplete="new-password" placeholder="Password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="daftar mt-2">
                    <p style="font-size: 10px">Belum memiliki akun? <a href="{{ route('register') }}" style="color:#135589; text-decoration:none;"><b>Daftar</b></a></p>
                </div>

                <div class="form-group mt-4">
                    <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                        <button type="submit" class="btn w3-indigo"
                            style="background-color: #135589 !important; border-radius: 20px; width: 246px; margin :10px 0 25px ">{{ __('Masuk') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
