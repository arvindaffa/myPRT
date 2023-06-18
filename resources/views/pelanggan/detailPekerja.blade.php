@extends('pelanggan.template.templateDetail')

@section('title')
    <title>Pekerja Anda - myPRT</title>
@endsection

@section('css')
    <style>
        .tombol {
            margin: 0px 330px 0px 0px;
            padding-top: -50px size: 15px;
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
            margin: 0px 0px 0px 25px;
        }

        .durasi1 {
            text-align: left;
            margin: 0px 50px 0px 25px;
            background-color: rgb(19, 85, 137);
            border-radius: 20px;
            padding: 15px 5px 5px 15px;
        }

        .pilih {
            text-align: center;
            margin: 10px 0px 0px 150px;
            background-color: rgb(19, 85, 137);
            border-radius: 20px;
            padding: 5px 15px 5px 15px;
        }

        .catatan {
            text-align: justify;
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

        .subtotal {
            text-align: left;
            margin: 0px 0px 0px 25px;
        }

        .rp {
            text-align: left;
            margin: 0px 0px 0px 25px;
        }
    </style>
@endsection

@section('tombol')
    <div class="row" style="margin-bottom: 5px">
        <div class="col-md-6">
            <a href="/pelanggan/caripekerja">
                <i class="tombol fa-solid fa-arrow-left"></i>
            </a>
        </div>
    @endsection

    @section('laman')
        <div class="text-pekerja col-md-6"
            style=" margin:0px 0px 80px 200px; font-family: 'Open Sans', sans-serif; line-height: 30px;">
            <p style="font-size: 25px;"><b>Detail Pekerja</b></p>
        </div>
    </div>
@endsection

@section('konten')
    <div class="nama" style="margin-bottom: ">
        <div class="text-nama col-md-6">
            <h3 style="font-size: 25px;"><b>{{ $pekerja->name }}</b></h3>
        </div>
    </div>

    <div class="isi row">
        <div class="col-md-6">
            <div class="durasi">
                <h4 style="font-size: 14px"><b>Umur :</b> {{ $umur }} tahun</h4>
            </div>
        </div>
        <div class="col-md-6">
            <div class="durasi">
                <h4 style="font-size: 14px"><b>Lokasi :</b> {{ $pekerja->lokasi }}</h4>
            </div>
        </div>
        <div class="col-md-8">
            <div class="durasi">
                <h4 style="font-size: 14px"><b>Biaya Sewa : </b>Rp {{ number_format($pekerja->gaji, 0, ',', '.') }}</h4>
            </div>
        </div>
        <div class="catatan col-md-12">
            <h4 style="font-size: 14px"><b>Deskripsi :</b></h4>
        </div>
        <div class="catatan col-md-10">
            <h4 style="font-size: 14px">{{ $pekerja->deskripsi }}</h4>
        </div>

        <div class="mb-4" style="margin:auto">
            <a href="/pelanggan/pilihpekerja/{{ $pekerja->id }}">
                <button class="mt-3" type="button submit"
                    style="padding: 0px 100px; color: white; height: 36px; background-color: #135589;
                margin: ;
                border-radius: 20px;">
                    <div class="row">
                        <b class="col-md-12" style="text-align: center; font-family: 'Nunito Sans', sans-serif; ">Pilih</b>
                    </div>
                </button>
            </a>
        </div>
    </div>
@endsection
