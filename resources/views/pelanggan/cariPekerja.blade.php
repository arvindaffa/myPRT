<!DOCTYPE html>
<html>

<head>
    <title>Cari Pekerja - myPRT</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/746ef6c8bd.js" crossorigin="anonymous"></script>

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        p {
            font-family: 'Nunito Sans', sans-serif;
        }

        h4 {
            font-family: 'Nunito Sans', sans-serif;
        }

        .card {
            width: 375px;
            margin: auto;
            border: none;
        }

        .konten {
            position: fixed;
            height: 600px;
            bottom: 0;
            width: 400px;
            background-color: #1B2223;
            color: white;
            border-radius: 40px 40px 0px 0px;
        }

        a:hover {
            color: white
        }

        .tombol {
            margin: 0px 330px 0px 0px;
            size: 15px;
            float: left;

        }

        .tombol:hover {
            color: rgb(63, 61, 86);
        }

        .text-1 {
            text-align: left;
            margin: 10px 0px 0px 0px;
        }

        .mag {
            color: black;
        }

        .pencarian {
            text-align: left;
            background-color: white;
            color: gray;
            margin: 0px 0px 0px 15px;
            padding: 0px 0px 0px 15px;
            border: 2px solid white;
            border-radius: 20px;
        }

        .pencarian2 {
            border: 0px none;
        }

        .lokasi {
            text-align: center;
            margin: 0px 0px 0px 0px;
            background-color: rgb(19, 85, 137);
            border-radius: 20px;
            padding: 5px 5px 5px 5px;
        }

        .umur {
            text-align: center;
            margin: 0px 0px 0px 0px;
            background-color: rgb(27, 34, 35);
            border-radius: 20px;
            padding: 5px 5px 5px 5px;
        }

        .gaji {
            text-align: center;
            margin: 0px 0px 0px 0px;
            background-color: rgb(27, 34, 35);
            border-radius: 20px;
            padding: 5px 5px 5px 5px;
        }

        .rating {
            text-align: center;
            margin: 0px 0px 0px 0px;
            background-color: rgb(27, 34, 35);
            border-radius: 20px;
            padding: 5px 5px 5px 5px;
        }

        .pembatas {
            background-color: gray;
            margin: 0px 0px 0px 15px;
            padding: 0.3px;
            border: 2px solid gray;
            border-radius: 20px;
        }

        .line1 {
            margin: 20px 5px 10px 10px;
        }

        .line2 {
            margin: 20px 5px 10px 10px;
        }

        .line3 {
            margin: 20px 5px 10px 10px;
        }

        .p1 {
            text-align: center;
            background-color: white;
            width: 150px;
            height: 170px;
            color: black;
            margin: 10px 0px 0px 0px;
            padding: 15px;
            border: 2px solid white;
            border-radius: 20px;
        }

        .gbr1 {
            position: relative;
            padding: 0px 0px 0px 0px;
        }

        .selengkapnya {
            color: white;
            text-align: left;
            margin: 0px 0px 0px 0px;
            background-color: rgb(19, 85, 137);
            border-radius: 20px;
            padding: 0px 10px 0px 10px;
            height: 23px;
        }

        /* chatgpt */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            margin: 0;
        }

        .container {
            width: 375px;
            height: 400px;
            overflow-x: scroll;
            overflow-y: hidden;
            white-space: nowrap;
            -ms-overflow-style: none;
            /* Untuk Internet Explorer dan Microsoft Edge */
            scrollbar-width: none;
            /* Untuk Firefox */
            touch-action: pan-y;
            -webkit-overflow-scrolling: touch;
            scroll-behavior: smooth;
        }

        .container::-webkit-scrollbar {
            display: none;
            /* Untuk Chrome, Safari, dan Opera */
        }

        .content {
            display: flex;
            height: 100%;
        }

        .item {
            flex-shrink: 0;
            width: 100vw;
            height: 100%;
        }

        .red {
            background-color: red;
        }

        .blue {
            background-color: blue;
        }

        .green {
            background-color: green;
        }
    </style>
    <script>
        const container = document.querySelector('.container');
        let isTouchStart = false;
        let touchStartX;
        let touchStartScrollLeft;

        container.addEventListener('touchstart', (e) => {
            if (e.touches.length === 2) {
                isTouchStart = true;
                touchStartX = Math.abs(e.touches[0].clientX - e.touches[1].clientX);
                touchStartScrollLeft = container.scrollLeft;
            }
        });

        container.addEventListener('touchmove', (e) => {
            if (e.touches.length === 2 && isTouchStart) {
                const touchCurrentX = Math.abs(e.touches[0].clientX - e.touches[1].clientX);
                const touchDeltaX = touchCurrentX - touchStartX;
                container.scrollLeft = touchStartScrollLeft - touchDeltaX;
                e.preventDefault();
            }
        });

        container.addEventListener('touchend', () => {
            isTouchStart = false;
        });
    </script>
</head>

<body>
    <div class="card">
        {{-- header --}}
        <div class="jumbotron jumbotron-fluid bg-white" style="margin-top: 0px; padding-top: 40px">
            <div class="container" style="text-align: right; padding-right: 30px; ">
                <div class="row" style="margin-top: 10px">
                    <div class="col-md-6">
                        <a href="/pelanggan/dashboard">
                            <i class="tombol fa-solid fa-arrow-left"></i>
                        </a>
                    </div>
                    <div class="text-pekerja col-md-6" style=" margin:0px 0px 0px 200px; ">
                        <div class="" style="line-height: 10px;">
                            <p style="font-size: 25px;"><b>Cari</b></p>
                            <p style="font-size: 25px;"><b>Pekerja</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- main --}}
        <div class="konten" style="font-family: 'Nunito Sans', sans-serif; margin-bottom: 0px">

            <div class="row mt-5">
                <div class="col-md-1"></div>
                <div class="text-1 col-md-9">
                    <h4 style="font-size: 15px"><b>Pilihan Pekerjaan di myPRT</b></h4>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-md-1"></div>
                <div class="pencarian form col-md-8">

                    <h4 style="font-size: 14px">
                        <i class="mag fa-solid fa-magnifying-glass" style="font-size: 15px"></i>
                        <input class="pencarian2" type="text" id="fname" style="font-size: 15px"
                            placeholder="Pencarian">
                    </h4>

                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="text-2 col-md-9">
                    <h4 style="font-size: 15px">Filter berdasarkan <img src="image/filter.png" alt=""
                            class="" style="height: 13.5px"></h4>

                </div>
                <div class="col-md-2">

                </div>
            </div>

            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <a href="#" id="lokasi" onclick="filter('lokasi')">
                        <h4 class="lokasi" style="font-size: 12px">Lokasi</h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#" id="umur" onclick="filter('umur')">
                        <h4 class="umur" style="font-size: 12px">Umur</h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <a href="#" id="gaji" onclick="filter('gaji')">
                        <h4 class="gaji" style="font-size: 12px">Gaji</h4>
                    </a>
                </div>
            </div> --}}

            <div class="row" style="margin-top: 5px;">
                <div class="col-md-1"></div>
                <div class="pembatas col-md-9"></div>
            </div>
            <div class="test">
                <div class="container scroll" style="margin-left: 10px">
                    <div class="content">
                        @php
                            $pekerjaChunks = $pekerja->chunk(2); // Memecah koleksi pekerja menjadi kelompok-kelompok dengan 2 data per kelompok
                        @endphp

                        @for ($i = 0; $i < $pekerjaChunks->count(); $i++)
                            <div class="line{{ $i + 1 }} row">
                                @foreach ($pekerjaChunks[$i] as $p)
                                    <div class="p1">
                                        <img src="{{ asset('image/ganteng.png') }}" alt="" class="gbr1"
                                            style="height: 51px; border-radius:50%">
                                        <h4 style="font-size: 16px"><b>{{ $p->name }}</b></h4>
                                        <div style="text-align: center;">
                                            <div class="row" style="margin-bottom: 10px; margin-top: -5px;">
                                                <div class="col-md-12">
                                                    <span>
                                                        <p style="font-size: 14px; margin: 0px; padding-left: 0px;"><img
                                                                src="image/lokasi.png" alt=""
                                                                style="height: 16.67px;">{{ $p->lokasi }}
                                                        </p>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <a href="/pelanggan/detailpekerja/{{ $p->id }}">
                                                <button class="selengkapnya" type="button">
                                                    <h4 style="font-size: 10px; text-align: center; margin-top: 4px">
                                                        <b>Selengkapnya</b>
                                                        <i class="fa-solid fa-arrow-right" style="font-size: 10px"></i>
                                                    </h4>
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endfor

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function filter(filterType) {
            // Hapus semua pekerja yang ada sebelumnya
            $('.p1').remove();

            // Ambil data pekerja berdasarkan filterType
            var dataPekerja = {!! json_encode($pekerja) !!};

            // Tampilkan data pekerja sesuai dengan filterType
            for (var i = 0; i < dataPekerja.length; i++) {
                var p = dataPekerja[i];
                var atribut = '';

                switch (filterType) {
                    case 'lokasi':
                        atribut = p.lokasi;
                        break;
                    case 'gaji':
                        atribut = p.gaji;
                        break;
                    case 'umur':
                        // Menghitung umur berdasarkan tanggal lahir
                        var today = new Date();
                        var birthDate = new Date(p.tanggal_lahir);
                        var age = today.getFullYear() - birthDate.getFullYear();

                        // Memperbarui atribut dengan umur
                        atribut = age + ' tahun';
                        break;
                }

                var div = '<div class="p1">' +
                    '<img src="image/ganteng2.png" alt="" class="gbr1" style="height: 51px">' +
                    '<h4 style="font-size: 16px"><b>' + p.name + '</b></h4>' +
                    '<div style="text-align: center;">' +
                    '<div class="row" style="margin-bottom: 10px; margin-top: -5px;">' +
                    '<div class="col-md-12">' +
                    '<span>' +
                    '<p style="font-size: 14px; margin: 0px; padding-left: 0px;"><img src="image/lokasi.png" alt="" style="height: 16.67px;">' +
                    atribut + '</p>' +
                    '</span>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class="">' +
                    '<a href="/pelanggan/detailpekerja/' + p.id + '">' +
                    '<button class="selengkapnya" type="button">' +
                    '<h4 style="font-size: 10px; text-align: center; margin-top: 4px">' +
                    '<b>Selengkapnya</b>' +
                    '<i class="fa-solid fa-arrow-right" style="font-size: 10px"></i>' +
                    '</h4>' +
                    '</button>' +
                    '</a>' +
                    '</div>' +
                    '</div>';

                $('.content').append(div);
            }
        }
    </script>
</body>

</html>
