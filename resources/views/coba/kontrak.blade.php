@extends('pelanggan.template.templateDetail')

@section('title')
    <title>Pekerja Anda - myPRT</title>
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

        .nama {
            height: 40px;
            width: 100%;
            padding-left: 20px;
        }

        .durasi {
            text-align: left;
        }

        .durasi1 {
            margin: 0px 0px 0px 20px;
        }

        .jamkerja {
            text-align: left;
            margin-left: 30px;
        }

        .jamkerja1 {
            text-align: left;
            margin-left: 94px;
        }

        .catatan {
            text-align: left;
            margin: 0px 0px 0px 10px;
        }

        .w3-input {
            /* border-bottom: transparent; */
            /* Atur gaya garis tepi saat belum dipencet */
        }

        .w3-input:focus,
        .w3-input::placeholder {
            outline: none;
            /* border: none; */
        }

        .catatan1 {
            text-align: left;
            color: rgb(94, 98, 98);
            padding: 0px 0px 0px 15px;
            border-radius: 20px;
        }

        .subtotal {
            text-align: left;
            margin-left: 25px;
        }

        .rp {
            text-align: left;
            margin-left: 25px;
        }

        select {
            outline: 0;
            background: rgb(19, 85, 137);
            color: #fff;
            border: 1px solid rgb(19, 85, 137);
            padding: 4px 4px 4px 10px;
            border-radius: 20px;
        }
    </style>
@endsection

@section('tombol')
    <div class="row" style="margin-bottom: 5px">
        <div class="col-md-6">
            <a href="/pelanggan/detailpekerja/{{ $pekerja->id }}">
                <i class="tombol fa-solid fa-arrow-left"></i>
            </a>
        </div>
    @endsection

    @section('laman')
        <div class="text-pekerja col-md-6" style=" margin:0px 0px 20px 200px">
            <h3 style="font-size: 25px;"><b>Kontrak Kerja</b></h3>
        </div>
    @endsection

    @section('konten')
        <form method="POST" action="{{ route('pilihpekerja') }}">
            @csrf
            <input type="hidden" name="pekerja_id" value="{{ $pekerja->id }}">

            <div class="nama">
                <div class="text-nama col-md-12">
                    <h3 style="font-size: 25px;"><b>{{ $pekerja->name }}</b></h3>
                </div>
            </div>

            <div class="row col-md-12 ml-1 mt-3">
                <label for="durasi" class="durasi col-md-5">Durasi kerja</label>
                <label for="durasi" class="jamkerja col-md-5">Jam kerja</label>
            </div>

            <div class="form-group row" style="!important text-align: left;">
                <div class="durasi1 col-md-3 row">
                    <div class="col-md-10" style="font-size: 15px;">
                        <select style="height: 40px; width:110px" name="durasi_kerja" id="durasi_kerja">
                            <option value="1 Bulan">1 Bulan</option>
                            <option value="3 Bulan">3 Bulan</option>
                            <option value="6 Bulan">6 Bulan</option>
                            <option value="12 Bulan">12 Bulan</option>
                        </select>
                    </div>

                </div>
                <div class="jamkerja1 biru col-md-3">
                    <div style="font-size: 15px">
                        <select style="height: 40px; width:110px" name="jam_kerja" id="jam_kerja">
                            <option value="4 jam/hari">4 jam/hari</option>
                            <option value="6 jam/hari">6 jam/hari</option>
                            <option value="8 jam/hari">8 jam/hari</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="catatan col-md-12">
                <h4 style="font-size: 14px; padding-left: 15px"><b>Catatan Khusus</b></h4>
            </div>

            <div class="catatan1 ml-4 col-md-10" style="margin-top: -10px">
                <input id="catatan_khusus" name="catatan_khusus" placeholder="tulis catatan" class="w3-input" type="text"
                    style="background-color: transparent; color:white">
            </div>

            <div class="subtotal col-md-12">
                <h4 style="font-size: 14px"><b>Total Biaya</b></h4>
            </div>

            <div class="rp col-md-12">
                <h4 style="font-size: 15px">Rp {{ number_format($pekerja->gaji, 0, ',', '.') }}</h4>
            </div>

            <div style="text-align: center">
                <button class="mt-3 mb-4" type="submit"
                    style="padding: 0px 10px; color: white; height: 36px; background-color: #135589; border-radius: 20px;">
                    <b class="col-md-12" style="text-align: center; font-family: 'Nunito Sans', sans-serif; ">Pesan
                        Sekarang</b>
                </button>
            </div>
        </form>
    @endsection
