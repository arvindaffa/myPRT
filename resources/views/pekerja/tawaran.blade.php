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
                <P><b>Kerja</b></P>
            </div>

        </div>
    </div>
@endsection

@section('konten')
    <div class="konten" style="text-align: center">
        <div class="row">
            <div class="col-md-12"
                style="font-size: 20px; font-family: 'Nunito Sans', sans-serif; padding-top: 30px; text-align: left; padding-left: 50px; ">
                <p><b>Tawaran Kerja</b></p>
            </div>
        </div>

        @foreach ($kontrak as $k)
            @if ($k->status == 'diproses')
                <form method="POST" action="{{ route('konfirmasi', $k->id) }}">
                    @csrf
                    <div class="row" style=" margin: auto; padding-top: 10px;">
                        <div
                            class="row"style="height: 150px; width: 317px; background-color: #135589; color: #FFFFFF; border-radius: 20px; margin: auto;">
                            <div class="col-md-12"
                                style="text-align: left; padding-top:20px; line-height: 10px; margin-bottom:-50px">
                                <p style="font-family: 'Nunito Sans', sans-serif;">Nama : {{ $k->user->name }}</p>
                                <p style="font-family: 'Nunito Sans', sans-serif;">Lokasi : {{ $k->user->lokasi }}</p>
                                <p style="font-family: 'Nunito Sans', sans-serif;">Kontrak : {{ $k->durasi_kerja }}</p>
                            </div>

                            <div class="row" style=" margin: auto;">
                                <div class="text col-md-6" style="padding-right: 33px">
                                    <button class="button" type="button submit" name="action" value="accept"
                                        style="color: #ffffff; height: 36px; width: 136px; background-color: #FFFFFF; border-radius: 20px;">
                                        <div class="row">
                                            <p class="col-md-12"
                                                style="text-align: center; padding-left: 15px; margin-top: 5px; font-family: 'Nunito Sans', sans-serif; color: #135589">
                                                <b>Setuju</b>
                                            </p>
                                        </div>
                                    </button>
                                </div>

                                <div class="text col-md-6" style="padding-right: 33px">
                                    <button class="button" type="button submit" name="action" value="reject"
                                        style="color: #ffffff; height: 36px; width: 136px; background-color: #135589; border-radius: 20px; border-color: white;">
                                        <div class="row">
                                            <p class="col-md-12"
                                                style="text-align: center; padding-left: 15px; margin-top: 5px; font-family: 'Nunito Sans', sans-serif;">
                                                <b>Tolak</b>
                                            </p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
        @endforeach
    </div>
@endsection
