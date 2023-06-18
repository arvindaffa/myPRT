@extends('pekerja.template.templatePekerja')

@section('title')
    <title>Profile - myPRT</title>
@endsection

@section('tombol')
    <h1><b> Profil</b> </h1>
@endsection


@section('konten')
    <div class="container mt-5" style="background-color: white; width: 400px; border-radius: 20px; height: 70px;  ">
        <div style="text-align: left; margin-top: -70px;">
            <img src="{{ asset('image/orang.png') }}" class="orang" width="70px" alt="">
        </div>

        <div class="form-group mt-4">
            <div class="nama">
                <input name="nama" placeholder="Nama" class="w3-input" type="text" readonly
                    value="{{ Auth::user()->name }}">
            </div>
        </div>

        <div class="form-group">
            <div class="email">
                <input name="email" placeholder="email" class="w3-input" type="text" readonly
                    value="{{ Auth::user()->email }}">
            </div>
        </div>

        <div class="form-group">
            <div class="lokasi">
                <input name="lokasi" placeholder="Lokasi" class="w3-input" type="text" readonly
                    value="{{ Auth::user()->lokasi }}">
            </div>
        </div>

        <div class="form-group">
            <div class="tanggal-lahir">
                <input name="tanggal_lahir" placeholder="Tanggal Lahir" class="w3-input" type="date" readonly
                    value="{{ Auth::user()->tanggal_lahir }}">
            </div>
        </div>

        <div class="form-group">
            <div class="deskripsi">
                <input name="deskripsi" placeholder="Deskripsi" class="w3-input" readonly value="{{ Auth::user()->deskripsi }}">
            </div>
        </div>

        <div class="form-group">
            <div class="gaji">
                <input name="gaji" placeholder="Gaji" class="w3-input" type="text" readonly
                    value="Rp {{ number_format(Auth::user()->gaji, 0, ',', '.') }}">
            </div>
        </div>

        <div class="form-group mt-5">
            <div class="d-flex col-sm-offset-2 col-sm-12" style="justify-content: center">
                <a href="/pekerja/profile"><button type="submit" class="btn w3-indigo"
                        style="background-color: #135589 !important; border-radius: 20px; width: 139px; ">Edit</button></a>
            </div>
        </div>
    </div>
@endsection
