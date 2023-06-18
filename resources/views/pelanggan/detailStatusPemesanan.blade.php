@extends('pelanggan.template.templateDetail')

@section('title')
    <title>Status Pemesanan - myPRT</title>
@endsection

@section('css')
    <style>
        .tombol {
            margin: 0px 330px 0px 0px;
            size: 15px;
            float: left;
        }

        .tombol:hover {
            color: rgb(63, 61, 86);
        }

        .text-nama {
            height: 40px;
            width: 100%;
            padding-left: 20px;
        }

        .status {
            text-align: center;
            /* margin: 5px 10px 0px 10px; */
            background-color: rgb(140, 144, 144);
            border-radius: 30px;
            padding: 1px 1px;
            margin-left: 10px;
            width: 128px;
            height: 38px;
        }

        .durasi {
            text-align: left;
            margin: 0px 0px 0px 25px;
        }

        .durasi1 {
            text-align: left;
            margin: 0px 50px 0px 25px;
            background-color: rgb(19, 85, 137);
            border-radius: 20px;
            padding: 5px 5px 5px 15px;
        }

        .jamkerja {
            text-align: left;
            margin: 0px 0px 0px 0px;
        }

        .jamkerja1 {
            text-align: left;
            margin: 0px 0px 0px 0px;
            background-color: rgb(19, 85, 137);
            border-radius: 20px;
            padding: 5px 5px 5px 5px;
            width: 120px;
            height: 30px;

        }

        .catatan {
            text-align: left;
            margin: 0px 0px 0px 25px;
        }

        .catatan1 {
            text-align: left;
            color: rgb(94, 98, 98);
            margin: 0px 0px 0px 35px;
            padding: 0px 0px 0px 15px;
            border: 2px solid rgb(94, 98, 98);
            border-radius: 20px;
        }

        .w3-input {
            border-bottom: transparent;
            /* Atur gaya garis tepi saat belum dipencet */
        }

        .w3-input:focus,
        .w3-input::placeholder {
            outline: none;
            border: none;
        }

        .subtotal {
            text-align: left;
            margin: 0px 0px 0px 25px;
        }

        .rp {
            text-align: left;
            margin: 0px 0px 0px 25px;
        }

        .sedangdiproses {
            text-align: center;
            background-color: rgb(140, 144, 144);
            border-radius: 20px;
            padding: 5px 5px 5px 5px;
        }

        .batalkan {
            text-align: center;
            margin: 0px 20px 0px 10px;
            background-color: rgb(178, 0, 0);
            border-radius: 20px;
            padding: 5px 5px 5px 5px;
        }
    </style>
@endsection

@section('tombol')
    <div class="row">
        <div class="col-md-6">
            <a href="/pelanggan/pekerjaanda">
                <i class="tombol fa-solid fa-arrow-left"></i>
            </a>
        </div>
        <div class="col-md-6">
            <div class="text-pekerja">
                <h3 style="font-size: 25px; font-family: 'Open Sans', sans-serif;"><b>Status Pemesanan</b></h3>
            </div>
        </div>
    @endsection

    @section('laman')
    @endsection

    @section('konten')
        <div class="" style="margin-top: 0px">
            <div class="row">
                <div class="text-nama col-md-6" style="display:flex ;align-items: center">
                    <h3 style="font-size: 22px; margin-left: 20px; font-family: 'Nunito Sans', sans-serif; text-align:left">
                        <b>{{ $namaPekerja }}</b>
                    </h3>
                </div>


                @if ($kontrak->status == 'disetujui')
                    <div class="col-md-6">
                        <div class="status" style="background-color: green">
                        @elseif ($kontrak->status == 'ditolak')
                            <div class="col-md-6">
                                <div class="status" style="background-color: red">
                                @else
                                    <div class="col-md-6">
                                        <div class="status">
                @endif
                <h3 style="font-size: 16px; font-family: 'Nunito Sans', sans-serif;">{{ $kontrak->status }}
                </h3>
            </div>
        </div>


    </div>

    <div class="isi row"style="margin-top: -5px">
        <div class="col-md-6">
            <div class="durasi">
                <h4 style="font-size: 16px; font-family: 'Nunito Sans', sans-serif; "><b>Durasi Kerja</b></h4>
            </div>
            <div class="durasi1">
                <div
                    style="font-size: 16px; line-height: 0px; margin-top: 10px; text-align: center; margin-right: 10px; margin-bottom: -6px; font-family: 'Nunito Sans', sans-serif;">
                    <p>{{ $kontrak->durasi_kerja }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="jamkerja" style="text-align:left; padding-left: 0px">
                <h4 style="font-size: 16px; font-family: 'Nunito Sans', sans-serif;"><b>Jam Kerja</b></h4>
            </div>
            <div class="jamkerja1">
                <div
                    style="font-size: 16px; line-height: 0px; margin-top: 10px; text-align: center; margin-right: 10px; margin-bottom: -6px; font-family: 'Nunito Sans', sans-serif;">
                    <P>{{ $kontrak->jam_kerja }}</P>
                </div>
            </div>
        </div>
        <div class="catatan col-md-12" style="margin-top: -5px;">
            <h4 style="font-size: 16px; font-family: 'Nunito Sans', sans-serif;"><b>Catatan Khusus</b></h4>
        </div>
        <div class="catatan1 col-md-10">
            <input id="catatan_khusus" name="catatan_khusus" placeholder="tidak ada catatan" class="w3-input" type="text"
                disabled style="background-color: transparent; color:white" value="{{ $kontrak->catatan_khusus }}">
            </h4>
        </div>
        <div class="col-md-2">
        </div>
        <div class="subtotal col-md-12" style="margin-top: -2px">
            <h4 style="font-size: 16px; font-family: 'Nunito Sans', sans-serif;"><b>Subtotal Biaya</b></h4>
        </div>
        <div class="rp col-md-12" style="margin-top: -5px">
            <div style="font-size: 16px; font-family: 'Nunito Sans', sans-serif;">Rp
                {{ number_format($gaji, 0, ',', '.') }}</div>
        </div>
    </div>

    @if ($kontrak->status == 'disetujui')
        <a href="/pembayaran/{{ $kontrak->id }}">
            <div style="text-align:center">
                <button class="mt-3" type="button submit"
                    style="padding: 0px 100px; color: white; height: 36px; background-color: #135589; border-radius: 20px; ">
                    <div class="row">
                        <b class="col-md-12" style="text-align: center; font-family: 'Nunito Sans', sans-serif; ">Bayar</b>
                    </div>
                </button>
            </div>
        </a>
    @elseif ($kontrak->status == 'ditolak')
        <a href="/pelanggan/dashboard">
            <div style="text-align:center">
                <button class="mt-3" type="button submit"
                    style="padding: 0px 100px; color: white; height: 36px; background-color: #135589; border-radius: 20px; ">
                    <div class="row">
                        <b class="col-md-12" style="text-align: center; font-family: 'Nunito Sans', sans-serif; ">ok</b>
                    </div>
                </button>
            </div>
        </a>
    @else
        <div style="text-align:center">
            <button class="mt-3" type="button submit" disabled
                style="padding: 0px 100px; color: white; height: 36px; border-radius: 20px; ">
                <div class="row">
                    <b class="col-md-12" style="text-align: center; font-family: 'Nunito Sans', sans-serif; ">Bayar</b>
                </div>
            </button>
        </div>
    @endif

    </div>
    </div>
@endsection
