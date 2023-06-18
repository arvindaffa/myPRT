@extends('pekerja.template.templateKontrakKerja')
{{-- revisi lagi --}}

@section('title')
    <title>Pekerja Anda - myPRT</title>
@endsection

@section('css')
    <style>

    </style>
@endsection

@section('judul')
    <div style="margin-top: -20px; color: #3A4F50; font-size: 24px; font-family: 'Open Sans', sans-serif;">
        <div class="row">
            <div class="col-md-2">
                <a href="/pekerja/dashboard">
                    <i class="tombol fa-solid fa-arrow-left" style="font-size: 20px;"></i>
                </a>
            </div>
            <div class="col-md-10" style="line-height: 15px;">
                <P><b>Kontrak</b></P>
                <P><b>Anda</b></P>
            </div>

        </div>
    </div>
@endsection

@section('konten')
    <div class="konten" style="text-align: center">
        <div class="row">
            <div class="col-md-12"
                style="font-size: 20px; font-family: 'Nunito Sans', sans-serif; padding-top: 30px; text-align: left; padding-left: 50px; ">
                <p><b>Kontrak saat ini</b></p>
            </div>
        </div>

        @foreach ($kontrak as $k)
            @if ($k->is_paid == '1')
                <div class="row" style=" margin: auto; padding-top: 5px;">
                    <div
                        class="row pb-2"style="width: 317px; background-color: #135589; color: #FFFFFF; border-radius: 20px; margin: auto;">
                        <div class="col-md-12" style="text-align: left; padding-top:20px; line-height: 10px">
                            <p style="font-family: 'Nunito Sans', sans-serif;">Nama : {{ $k->user->name }}</p>
                                <p style="font-family: 'Nunito Sans', sans-serif;">Lokasi : {{ $k->user->lokasi }}</p>
                                <p style="font-family: 'Nunito Sans', sans-serif;">Kontrak : {{ $k->durasi_kerja }}</p>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>


    </div>
@endsection
