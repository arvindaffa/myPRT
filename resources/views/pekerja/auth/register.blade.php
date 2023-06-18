{{-- <!DOCTYPE html>
<html>

{{-- <head>
    <title>Daftar Akun - myPRT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>
        body {
            font-family: 'Poppins';
        }

        .w3-input::-webkit-input-placeholder {
            color: #135589;
            font-size: 16px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>

</head> --}}

{{-- <body class="pt-5" style="background-color:black">
    <div style="text-align: center; margin:90px 0 50px">
        <img src="{{ asset('image/myPRT.png') }}" width="143px" alt="">
    </div>
    <div class="container" style="padding: 0 20px">
        <div class="container m-auto"
            style="background-color: white;  width: 294px; border-radius: 20px; padding-top:30px">
            <div style="text-align: center;">
                <img src="{{ asset('image/daftartebal.png') }}" width="105px" style="text-align: center;    "
                    alt="">
            </div>
            <form class="form-horizontal" style="margin-top: 20px" action="{{ route('pekerja.register') }}"
                method="post">
                {{ csrf_field() }}

                <div class="form-group ">
                    <div class="name">
                        <input name="name" placeholder="Name" class="w3-input" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <div class="email">
                        <input name="email" placeholder="Email" class="w3-input" type="text">
                    </div>
                </div>

                <div class="form-group">
                    <div class="password">
                        <input name="password" placeholder="Password" class="w3-input" type="password">
                    </div>
                </div>

                <div class="form-group">
                    <img src="{{ asset('image/sudahadaakun.png') }}" width="144px" style="margin-top:-10px"
                        alt="">
                </div>

                <div class="text-center">
                    <img src="{{ asset('image/checkbox.png') }}" width="265px" alt="">
                </div>

                <div class="form-group">
                    <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                        <button type="submit" class="btn w3-indigo"
                            style="background-color: #135589 !important; border-radius: 20px; width: 246px; margin :10px 0 25px ">Daftar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</body>

</html> --}}


<x-pekerja-guest-layout>

    <h1 class="text-5xl font-bold text-center" style="color: white; margin:70px 0 55px">myPRT</h1>

    <div class="container" style="padding: 0 20px">
        <div class="container m-auto"
            style="background-color: white;  width: 294px; border-radius: 20px; padding-top:30px">
            <h2 class="text-4xl font-bold text-center">Daftar</h2>

            <form method="POST" action="{{ route('pekerja.register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-text-input id="name" class="w3-input block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" placeholder="Name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

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

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-text-input id="password_confirmation" class="w3-input block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Confirmation Password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="daftar mt-2">
                    <p style="font-size: 10px">Sudah memiliki akun? <a href="{{ route('pekerja.login') }}" style="color:#135589; text-decoration:none;"><b>Masuk</b></a></p>
                </div>

                <div class="form-group mt-4">
                    <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                        <button type="submit" class="btn w3-indigo"
                            style="background-color: #135589 !important; border-radius: 20px; width: 246px; margin :10px 0 25px ">{{ __('Daftar') }}</button>
                    </div>
                </div>

                {{-- <x-primary-button class="ml-4">
            {{ __('Register') }}
        </x-primary-button> --}}
            </form>
        </div>
    </div>
</x-pekerja-guest-layout>
