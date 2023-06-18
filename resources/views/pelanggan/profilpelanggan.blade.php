@extends('pelanggan.template.templatePelanggan')

@section('title')
    <title>Profile - myPRT</title>
@endsection

@section('css')
    <style>
        .foto {
            padding-top: 10px;
            float: left;
        }

        .jmlhsaldo {
            float: left;
            text-align: center;
        }

        .button {
            background-color: white;
            /* Green */
            border: none;
            border-radius: 20px;
            color: #1B2223;
            padding: 4px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #1B2223;
            display: block;
            transition: 0.3s;
            text-align: left;
            margin-left: 100px
        }

        .sidenav a:hover {
            color: black;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "50%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.body.style.backgroundColor = "white";
        }
    </script>
@endsection

@section('tombol')
    <h1><b> Profil</b> </h1>
@endsection

@section('konten')
    <div class="container m-auto" style="background-color: white;  width: 400px; border-radius: 20px; height: 70px;">
        <div style="text-align: left; margin-top: -10px;">
            <img src="{{ asset('image/orang.png') }}" class="orang" width="70px" alt="">
        </div>

        <div class="form-group mt-3">
            <div class="username">
                <input name="username" value="{{ Auth::user()->name }}" readonly placeholder="Username" class="w3-input"
                    type="text">
            </div>
        </div>

        <div class="form-group">
            <div class="email">
                <input name="email" value="{{ Auth::user()->email }}" readonly class="w3-input" type="email">
            </div>
        </div>

        <div class="form-group">
            <div class="Lokasi">
                <input name="Lokasi" value="{{ Auth::user()->lokasi }}" readonly placeholder="Lokasi" class="w3-input"
                    type="lokasi">
            </div>
        </div>


        <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: right">
            <a href="/pelanggan/profile"><button type="submit" class="btn w3-indigo"
                    style="background-color: #135589 !important; border-radius: 20px; width: 116px; margin :10px 0 25px">Edit</button></a>
        </div>
    </div>
@endsection
