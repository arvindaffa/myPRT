<!DOCTYPE html>
<html>

<head>
    @yield('title')

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

    <script src="https://kit.fontawesome.com/746ef6c8bd.js" crossorigin="anonymous"></script>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;500&family=Open+Sans:wght@700&display=swap"
        rel="stylesheet">
    <style>
        <style>body {
            font-family: 'Nunito Sans', sans-serif;
        }

        .card {
            width: 375px;
            margin: auto;
            border: none;
        }

        .konten {
            position: fixed;
            height: 620px;
            bottom: 0;
            width: 400px;
            background-color: #1B2223;
            color: white;
            border-radius: 40px 40px 0px 0px;
            font-family: 'Nunito Sans', sans-serif;
        }

        a:hover {
            color: white
        }
    </style>

    @yield('css')

</head>

<body>
    <div class="card" style="margin: auto;">
        {{-- header --}}
        <div class="jumbotron jumbotron-fluid bg-white" style="height: 0px;">
            <div class="container" style="text-align: right; padding-right: 30px; margin-top: -40px">
                @yield('tombol')
                @yield('laman')
            </div>
        </div>



        {{-- main --}}
        <div class="konten row" style="text-align: ; font-family: 'Nunito Sans', sans-serif;">
            <div style="margin:auto">
                <img src="{{ asset('image/ganteng.png') }}" alt="" class="mt-4"
                    style="height: 250px;">
            </div>
            @yield('konten')
        </div>
    </div>
</body>

</html>
