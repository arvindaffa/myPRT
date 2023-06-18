@extends('pekerja.template.templatePekerja')

@section('title')
    <title>Homepage - myPRT</title>
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
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="">
            <form method="POST" action="{{ route('pekerja.logout') }}">
                @csrf

                <x-dropdown-link :href="route('pekerja.logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </a>
    </div>

    <span style="color:#1B2223; cursor:pointer" onclick="openNav()"><i class="fa-sharp fa-solid fa-bars fa-lg"
            style="float: left; padding:20px 0px 0px 40px"></i></span>
@endsection

@section('laman')
    <h1><b> Home</b> </h1>
@endsection

@section('konten')
    <div class="halo row"
        style="height: 71px; width: 294px; background-color: #1B2223; color: white; border-radius: 20px; margin: auto">
        <div class="foto col-md-3">
            <img src="{{ asset('image/orang.png') }}" width="50px" alt="">
        </div>
        <div class="text col-md-8">
            <h6><b>Halo,</b></h6>
                <h4><b>{{ Auth::user()->name }}</b></h4>
        </div>
    </div>

    <div class="text-saldo" style="margin:60px 0px 0px 40px">
        <h3>Tawaran Kontrak</h3>
    </div>

    <div class="saldo row"
        style="height: 71px; width: 294px; background-color: #1B2223; color: white; border-radius: 20px; margin: auto;padding-top:13px">
        <div class="jmlhsaldo col-md-7">
            <h5>{{$totalTawaranKontrak}} Tawaran</h5>
        </div>
        <div class="text col-md-5" style="padding-top: 7px">
            <a href="/pekerja/tawaran">
                <button class="button" type="button">
                    Detail
                </button>
            </a>
        </div>
    </div>

    <div class="text-pekerja" style="margin:40px 0px 0px 40px">
        <h3>Kontrak anda</h3>
    </div>

    <div class="pekerja row"
        style="height: 71px; width: 294px; background-color: #1B2223; color: white; border-radius: 20px; margin: auto; ">
        <div class="jmlhsaldo col-md-1" style="margin:auto">
            <img src="{{ asset('image/gbrpekerja.png') }}" width="20px" alt="">
        </div>
        <div class="text col-md-10" style="padding: 15px">
            <a href="kontrakanda" style="text-decoration: none; color: white ">
                <h5>{{ $totalKontrakAnda }} Orang</h5>
            </a>
        </div>
    </div>
@endsection


{{-- <x-pekerja-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-pekerja-layout> --}}
