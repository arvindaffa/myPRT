@extends('pelanggan.template.templateIsiUlang')
{{-- revisi lagi --}}

@section('title')
    <title>Pekerja Anda - myPRT</title>
@endsection

@section('css')
    <style>
        .w3-input::-webkit-input-placeholder {
            color: #ffffff;
            font-size: 16px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        .jumlah {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
            opacity: 50%;
        }
    </style>
@endsection

@section('judul')
    <div style="margin-top: -20px; color: #3A4F50; font-size: 30px; font-family: 'Open Sans', sans-serif;">
        <P><b> Isi Ulang</b></P>
    </div>
@endsection

@section('konten')
    <div class="konten" style="text-align: center; font-family: 'Nunito Sans', sans-serif;">
        <div class="row">
            <div class="text-saldo col-md-7" style="margin-left: 40px; margin-top: 40px; text-align: left">
                <h3 style="font-size: 20px; font-family: 'Nunito Sans', sans-serif;"><b>Masukkan Nomimal</b></h3>
            </div>
            <div class="col-md-5">
            </div>
        </div>

        <form action="{{ route('pelanggan.isiulang') }}" method="POST">
            @csrf

            <div class="row jumlah">
                <div class="form-group" style="width: 317px;">
                    <div class="saldo">
                        <input id="saldo" name="saldo" min="0" required placeholder="Rp 50.000"
                            class="w3-input" type="text" style="background-color: #1B2223; color:white">
                    </div>
                </div>
            </div>

            <div
                class="row"style="height: 75px; width: 317px; background-color: #135589; color: #FFFFFF; border-radius: 20px; margin: auto;margin-top:13px">
                <div class="col-md-4"
                    style="padding-bottom: -30px; font-size: 50px; padding-top: 2px; text-align: left; padding-left: 20px">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <div class="col-md-8" style="text-align: left; padding-top:17px; ">
                    <h5 style="font-family: 'Nunito Sans', sans-serif;"><b>PRTbank</b></h5>
                </div>

            </div>

            <div class="row" style=" margin: auto; padding-top: 300px;">
                <div class="text col-md-6" style="padding-left: 33px">
                    <a href="/pelanggan/dashboard">
                        <button class="button" type="button"
                            style="color: #135589; height: 36px; width: 136px; background-color: #ffffff; border-radius: 20px; padding-top: 4px;">
                            <b>Home</b>
                        </button>
                    </a>
                </div>

                <div class="text col-md-6" style="padding-right: 33px">
                    <a href="/isiulangberhasil">
                        <button class="button" type="submit button"
                            style="color: #ffffff; height: 36px; width: 136px; background-color: #135589; border-radius: 20px;">
                            <div class="row">
                                <i class="col-md-4 fa-solid fa-shield"
                                    style="font-size: 19.4px; text-align: left; padding-left: 30px; padding-top: 3px "></i>
                                <b class="col-md-8" style="text-align: left; padding-left: 8px; padding-top: 1px;">Isi
                                    Ulang</b>
                            </div>
                        </button>
                    </a>
                </div>
            </div>
        </form>

    </div>
@endsection
