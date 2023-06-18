<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/746ef6c8bd.js" crossorigin="anonymous"></script>

    {{-- w3school --}}
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            font-family: 'Poppins';
        }

        .card {
            width: 375px;
            margin: auto;
            border: none;
        }

        .footer {
            position: fixed;
            height: 100px;
            bottom: 0;
            width: 400px;
            background-color: #1B2223;
            color: white;
            border-radius: 20px 20px 0px 0px;
        }

        a:hover {
            color: white
        }
    </style>

    @yield('css')

    @yield('js')
</head>

<body>
    <div class="card">
        {{-- header --}}
        <div class="jumbotron jumbotron-fluid bg-white" style="height: 80px;">
            <div class="container" style="text-align: right; padding-right: 30px; ">
                @yield('tombol')
                @yield('laman')
            </div>
        </div>

        @yield('konten')

        {{-- footer --}}
        {{-- <div class="footer row" style="text-align: center;">

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
        </div> --}}
    </div>
</body>
</html>
