@extends('pelanggan.template.templateIsiUlang')
{{-- revisi lagi --}}

@section('title')
    <title>Pekerja Anda - myPRT</title>
@endsection

@section('css')
    <style>

    </style>
@endsection

@section('judul')
    <div style="margin-top: -20px; color: #3A4F50; font-size: 30px; font-family: 'Open Sans', sans-serif; ">
        <P><b> Isi Ulang</b></P>
    </div>
@endsection

@section('konten')
    <div class="konten" style="text-align: center">
        <div class="row" style=" margin: auto; padding-top: 150px">
            <div class="text col-md-12">
                <img src="{{ asset('image/pembayaranterverifikasi.png') }}" style="height: 150px;" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" style="font-size: 20px; font-family: 'Nunito Sans', sans-serif; padding-top: 15px;">
                <p><b>isi ulang berhasil</b></p>
            </div>
        </div>

        <div class="row mt-5" style=" margin: auto; padding-top: 100px;">
            <div class="text col-md-12" style="padding-top: 10px">
                <a href="/pelanggan/dashboard">
                    <button class="button" type="button"
                        style="color: #ffffff; height: 40px; width: 255px; background-color: #135589; border-radius: 20px; padding-top: 2px;">
                        <span style="padding-right: 10px"><i class="fa-solid fa-house-chimney"></i></span>
                        <span> <b>Kembali ke Home</b></span>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
