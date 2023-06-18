@extends('pelanggan.template.templatePelanggan')

@section('title')
    <title>Pekerja Anda - myPRT</title>
@endsection

@section('css')
    <style>
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

        a:hover {
            color: #1B2223;
        }
    </style>
@endsection

@section('tombol')
    <a href="/pelanggan/dashboard"><i class="fa-solid fa-arrow-left fa-lg"
            style="float: left; padding:20px 0px 0px 40px; cursor:pointer; text-decoration:none"></i></a>
@endsection

@section('laman')
    <div>
        <h1 style="font-size: 25px;"><b> Pekerja Anda</b> </h1>
    </div>
@endsection

@section('konten')
    <div class="text-saldo" style="margin:20px 0px 0px 40px">
        <h3 style="font-size: 20px;"><b>Pekerja Sekarang</b></h3>
    </div>

    @foreach ($kontrakDibayar as $kontrak)
            <div class="halo row mt-2"
                style="height: 71px; width: 294px; background-color: #1B2223; color: white; border-radius: 20px; margin: auto;">
                <div class="foto col-md-3" style="padding-top: 10px;">
                    <img src="{{ asset('image/ganteng.png') }}" width="50px" alt="" style="border-radius: 50%">
                </div>
                <div class="text col-md-5" style="padding-top: 17px">
                    <h4 style="font-size: 14px"><b>{{ $kontrak->pekerja->name }}</b></h4>
                </div>
                <div class="text col-md-4" style="padding-top: 23px">
                    <a href="/pelanggan/pekerjasekarang/{{ $kontrak->id }}">
                        <button class="button m-auto" type="button" style="font-size: 10px;width: 62px">
                            <b>Status</b>
                        </button>
                    </a>
                </div>
            </div>
        @endforeach

    <div class="text-pekerja" style="margin:40px 0px 0px 40px">
        <h3 style="font-size: 20px;"><b>Status pemesanan</b></h3>
    </div>

        @foreach ($kontrakBelumDibayar as $kontrak)
            <div class="halo row mt-2"
                style="height: 71px; width: 294px; background-color: #1B2223; color: white; border-radius: 20px; margin: auto;">
                <div class="foto col-md-3" style="padding-top: 10px;">
                    <img src="{{ asset('image/ganteng.png') }}" width="50px" alt="" style="border-radius: 50%">
                </div>
                <div class="text col-md-5" style="padding-top: 17px">
                    <h4 style="font-size: 14px"><b>{{ $kontrak->pekerja->name }}</b></h4>
                </div>
                <div class="text col-md-4" style="padding-top: 23px">
                    <a href="/pelanggan/statuspemesanan/{{ $kontrak->id }}">
                        <button class="button m-auto" type="button" style="font-size: 10px;width: 62px">
                            <b>Status</b>
                        </button>
                    </a>
                </div>
            </div>
        @endforeach

@endsection
