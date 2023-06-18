@extends('pelanggan.template.templatePembayaran')
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

        .dark-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Nilai transparansi 0.5 */
            z-index: 9998;
            /* Peringkat z-index agar di atas modal */
            display: none;
            /* Sembunyikan secara default */
        }

        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: white;
            color: black;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
            z-index: 9999;
        }
    </style>

    <script>
        window.onload = function() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block'; // Menampilkan latar belakang gelap
        };

        function kembali() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
@endsection

@section('judul')
    <div style="margin-top: -20px; color: #3A4F50; font-size: 30px; font-family: 'Open Sans', sans-serif;">
        <div class="row">
            <div class="col-md-2">
                <a href="/pelanggan/statuspemesanan/{{ $kontrak->id }}">
                    <i class="tombol fa-solid fa-arrow-left" style="font-size: 20px;"></i>
                </a>
            </div>
            <div class="col-md-10">
                <P><b>Pembayaran</b></P>
            </div>

        </div>
    </div>
@endsection

@section('konten')
    <div class="konten" style="text-align: center; font-family: 'Nunito Sans', sans-serif;">
        <div style="padding-top: 30px; ">
            <div
                class="row"style="height: 75px; width: 317px; background-color: #135589; color: #FFFFFF; border-radius: 20px; margin: auto;margin-top:13px;">
                <div class="col-md-4"
                    style="padding-bottom: -30px; font-size: 50px; padding-top: 2px; text-align: left; padding-left: 20px">
                    <i class="fa-solid fa-building-columns"></i>
                </div>
                <div class="col-md-8" style="text-align: left; padding-top:17px; ">
                    <h5 style="font-family: 'Nunito Sans', sans-serif;"><b>PRTbank</b></h5>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12" style="margin-bottom: -7px; margin-top: 320px; font-family: 'Nunito Sans', sans-serif;">
                <p style="text-align: left; padding-left: 42px; font-size: 18px"><b>Ringkasan Pembayaran</b></p>
            </div>
        </div>

        <div class="row" style="padding-bottom: 20px; font-family: 'Nunito Sans', sans-serif;">
            <div class="col-md-6">
                <p>Total Tagihan</p>
            </div>
            <div class="col-md-6">
                <p>Rp {{ number_format($gaji, 0, ',', '.') }}</p>
            </div>
        </div>


        <div class="row" style=" margin: auto;">

            <div class="text col-md-6"
                style="; line-height: 5px; text-align: left; padding-left: 42px; font-family: 'Nunito Sans', sans-serif;">
                <p><b>total bayar</b></p>
                <p style="color: #E88A33">Rp {{ number_format($gaji, 0, ',', '.') }}</p>
            </div>
            <div class="text col-md-6" style="padding-right: 33px">

                <form id="payment-form" method="POST" action="{{ route('pembayaran', $kontrak->id) }}">
                    @csrf
                    <button class="button" type="button submit" onclick="bayar()"
                        style="color: #ffffff; height: 36px; width: 136px; background-color: #135589; border-radius: 20px;">
                        <div class="row">
                            <i class="col-md-4 fa-solid fa-shield"
                                style="font-size: 19.4px; text-align: left; padding-left: 32px; padding-top: 1px "></i>
                            <b class="col-md-8"
                                style="text-align: left; padding-left: 15px; margin-top: -1px; font-family: 'Nunito Sans', sans-serif;">Bayar</b>
                        </div>
                    </button>
                </form>

                <!-- Modal -->
                <div id="popup" class="popup" style="display: none; border-radius:5%; width:20%;">
                    <img src="{{ asset('image/alert.png') }}" alt="">
                    <p>Saldo anda tidak mencukupi, silahkan isi PRTpay Anda</p>
                    <button onclick="kembali()"
                        style="color: #ffffff;padding:6px; width:30%; background-color: #135589; border-radius: 20px;">kembali</button>
                    <a href="/pelanggan/isiulang"><button
                        style="color: #135589;padding:6px; width:30%; background-color:#ffffff; border-color:#135589;
                        border-radius: 20px;">isi
                        Ulang</button></a>
                </div>

                <!-- Latar belakang gelap -->
                <div class="dark-overlay" id="overlay"></div>

                {{-- <a href="/pembayaranterverifikasi/{{ $kontrak->id }}">
                    <button class="button" type="button submit"
                        style="color: #ffffff; height: 36px; width: 136px; background-color: #135589; border-radius: 20px;">
                        <div class="row">
                            <i class="col-md-4 fa-solid fa-shield"
                                style="font-size: 19.4px; text-align: left; padding-left: 32px; padding-top: 1px "></i>
                            <b class="col-md-8"
                                style="text-align: left; padding-left: 15px; margin-top: -1px; font-family: 'Nunito Sans', sans-serif;">Bayar</b>
                        </div>
                    </button>
                </a> --}}
            </div>
        </div>
    </div>
@endsection
