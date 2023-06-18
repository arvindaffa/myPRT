<html>

<head>
    <title>

    </title>

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
    </style>

</head>

<body>
    <div class="container" style="text-align: center">
        <div style="margin-top: 110px">
            <img src={{ asset('image/logo.jpeg') }} height="78px" alt="">
        </div>

        <div>
            <img src={{ asset('image/image.png') }} width="328px" height="265px" alt="">
        </div>

        <div>
            <img src={{ asset('image/masuk-sbg.png') }} width="193px" alt="">
        </div>

        @if (Route::has('login'))
            @auth
                <div style="margin-top: 20px">
                    <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                        <a href="{{ route('login') }}"> <button type="submit" class="btn w3-indigo"
                                style="background-color: #135589 !important; border-radius: 20px; width: 246px;">
                                <b> Laman Home Pelanggan </b> </button></a>

                    </div>
                @else
                    <div style="margin-top: 20px">
                        <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                            <a href="{{ route('login') }}"> <button type="submit" class="btn w3-indigo"
                                    style="background-color: #135589 !important; border-radius: 20px; width: 246px;">
                                    <b> Pelanggan </b> </button></a>
                        </div>
                    </div>
                @endauth
        @endif


        @if (Route::has('pekerja.login'))
            @auth('pekerja')
                <div style="margin-top: 20px">
                    <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                        <a href="{{ url('/pekerja/dashboard') }}"> <button type="submit" class="btn w3-indigo"
                                style="background-color: #135589 !important; border-radius: 20px; width: 246px;">
                                <b> Laman Home Pekerja </b> </button></a>
                    </div>
                </div>
            @else
                <div style="margin-top: 20px">
                    <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                        <a href="{{ route('pekerja.login') }}"> <button type="submit" class="btn w3-indigo"
                                style="background-color: #135589 !important; border-radius: 20px; width: 246px;">
                                <b> Pekerja </b> </button></a>
                    </div>
                </div>
            @endauth
        @endif
    </div>
</body>

</html>
