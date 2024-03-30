<!DOCTYPE html>
<html lang="en">

<head>
    <title>DISPERDAGIN | Dinas Perdagangan Dan Industri</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Tautan ke file CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="shortcut icon" href="images/lpicon2.png">

    <!-- CSS utama Anda -->
    <link rel="stylesheet" href="css/templatemo-digital-trend.css">

    <!-- Tautan ke Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <!-- Tautan ke Leaflet dan Google Maps JavaScript -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw&callback=initMap" defer></script>-->

    <style>
        #map,
        #mapkota,
        #idnmappesantren {
            width: 100%;
            height: 500px;
            top: 45px;
            margin-bottom: 25px;
        }

        #alfamapmojoroto,
        #mapkotaalfa,
        #mappesantrenalfa {
            width: 100%;
            height: 500px;
            top: 45px;
            margin-bottom: 25px;
        }

        #indomojoroto,
        #indopesantren,
        #indokota {
            display: none;
        }

        #alfamojoroto,
        #alfapesantren,
        #alfakota {
            display: none;
        }
    </style>
</head>

<body>

    <div class="loading-screen">
        <div class="loader"></div>
    </div>
    <!-- MENU BAR -->
    <!-- , ISI,Layanan(Dropdown), Zona Integritas, UNDUHAN-->
    <nav class="navbar banner">
        <div class="row">
            <div class="col">
                <a href="index.php">
                    <div class="logo">
                        <img src="images/dp1.png" alt="logo" style="height: 70px;">
                    </div>
                </a>
            </div>
        </div>
        <div class="row right-side">
            <div class="col">
                <p class="text-light mx-1">Kediri harmoni</p>
            </div>
            <div class="col">
                <form class="d-flex bg-light f-search rounded" role="search">
                    <input type="text" placeholder="Find" class="border-0 rounded">
                    <button class="btn border-0 bg-white py-0 px-0" type="submit"><img src="images/search-icons.png"
                            class="border-0 search-icons my-auto gb-white" alt=""></button>
                </form>
            </div>
        </div>
    </nav>

    <nav class="navbar bg-white navbar-expand-sm position-sticky shadow shadow-sm">
        <div class="row">
            <div class="col">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-0 px-0">
                        <li class="nav-item">
                            <a href="index.php" class="">
                                <img src="images/home-48px.png" class="img-thumbnail home border-0 my-0" alt="">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#project" class="nav-link smoothScroll ">Berita</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="informasi-dropdown-toggle">Informasi</a>
                            <ul class="isi-dropdown" id="informasi-dropdown">
                                <li><a href="informasi-pasar.php">Informasi Pasar</a></li>
                                <li><a href="pasar.html">Pasar</a></li>
                                <li class="nav-item">
                                    <a href="minimarket.php" class=" ">minimarket</a>
                                </li>
                                <li><a href="mall.html">Mall</a></li>
                                <li><a href="ikm.html">Industri Kecil Menengah</a></li>
                            </ul>

                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Layanan</a>
                            <ul class="isi-dropdown" id="layanan-dropdown">
                                <li><a href="https://banmod.indagkediri.online/home.html" target="_blank">Bantuan
                                        Modal</a>
                                </li>
                                <!-- <li><a href="#">Izin Tempat Penjualan Minuman Beralkohol</a></li> -->
                                <li><a href="merk.html">Legalitas Merk</a></li>
                                <li><a href="halal.html">Sertifikasi Halal</a></li>
                                <li><a href="sinas.html">Sinas</a></li>
                                <li><a href="tera.html">Tera/Tera Ulang</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="https://pusakaumkm.id/home/" class="nav-link" target="_blank">Produk
                                Unggulan</a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link smoothScroll">Unduhan</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link ">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link ">Greate Sale</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link ">Survey</a>
                        </li>
                        <div class="row px-5">
                            <div class="col px-5">
                                <ul class="navbar-nav float-right">
                                    <li class="nav-item">
                                        <a href="https://www.instagram.com/disperdagin_kotakediri?igsh=ZDhvNmF0NXlpempr"
                                            target="blank">
                                            <img src="images/ig-icons.png" class="img-thumbnail w-75 border-0" alt="">
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://www.instagram.com/disperdagin_kotakediri?igsh=ZDhvNmF0NXlpempr"
                                            target="blank">
                                            <img src="images/fb-icons.png" class="img-thumbnail w-75 border-0" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>



                        <div class="scroll-up-icon">
                            <i class="fa fa-arrow-up"></i>
                        </div>

                        <div class="fa-eye-icon">
                            <button class="btn" type="button" data-toggle="modal" data-target="#exampleModal">
                                <img src="images/massage.png" class="w-50" alt="">
                            </button </div>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="market py-2">
        <center>
            <h3 class="text-white">INFORMASI MINIMARKET</h3>
            <p class="text-white">Kota Kediri</p>
        </center>
    </div>
    <section class="testimonial section-padding">
        <div class="container ">
            <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

            <div class="row d-flex justify-content-center">
                <div class="col-6 col-sm-3">
                    <div class="indo-btn">
                        <div class="drop">
                            <center>
                                <button class="dropbtn border-2 border-black border dropdown-toggle border-dark"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INDOMARET</button>
                                <div class="drop-content">
                                    <a onclick="show('indomojoroto')" class=" custom-tbl mt-3">Mojoroto</a>
                                    <a onclick="show('indopesantren')" class=" custom-tbl mt-3">Pesantren</a>
                                    <a onclick="show('indokota')" class=" custom-tbl mt-3">Kota</a>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="indo-btn">
                        <center>
                            <div class="drop">
                                <button class="dropbtn border-2 border-black border dropdown-toggle border-dark"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALFAMART</button>
                                <div class="drop-content">
                                    <a onclick="show('alfamojoroto')" class=" custom-tbl mt-3">Mojoroto</a>
                                    <a onclick="show('alfapesantren')" class=" custom-tbl mt-3">Pesantren</a>
                                    <a onclick="show('alfakota')" class=" custom-tbl mt-3">Kota</a>
                                </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="container">
            <div id="indomojoroto">
                <script>
                    function dummy() { }
                    window.dummy = dummy;
                </script>

                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw&callback=dummy"></script>
                <div id="map"></div>
                <script>
                    function initMapmojoroto() {
                        // Inisialisasi peta dengan lokasi awal yang ditentukan
                        var initLocation = { lat: -7.804341023077927, lng: 111.99901874589823 };
                        var map = new google.maps.Map(document.getElementById("map"), {
                            center: initLocation,
                            zoom: 13,
                        });

                        // Array objek dengan informasi marker
                        var marker = [
                            {
                                position: { lat: -7.826927351102762, lng: 112.00030921129246 },
                                title: "Indomaret Agus Salim",
                            },
                            {
                                position: { lat: -7.827845434767996, lng: 111.99669813158279 },
                                title: "Indomaret Kemuning",
                            },
                            {
                                position: { lat: -7.835722398777921, lng: 111.99373760483132 },
                                title: "Indomaret Raung",
                            },
                            {
                                position: { lat: -7.8274046237566175, lng: 111.98686527732241 },
                                title: "Indomaret Semeru",
                            },
                            {
                                position: { lat: -7.811106735427172, lng: 111.99274541124899 },
                                title: "Indomaret Veteran",
                            },
                            {
                                position: { lat: -7.824039906395721, lng: 112.00564684788883 },
                                title: "Indomaret Wachid Hasyim",
                            },
                            {
                                position: { lat: -7.821534787036125, lng: 111.99843272975353 },
                                title: "Indomaret Penanggungan",
                            },
                            {
                                position: { lat: -7.824039906395721, lng: 112.00564684788883 },
                                title: "Indomaret Mojoroto",
                            },
                            {
                                position: { lat: -7.799083915771001, lng: 112.00165040719352 },
                                title: "Indomaret Ahmad Dahlan",
                            },
                            {
                                position: { lat: -7.780775809919864, lng: 112.00068399296815 },
                                title: "Indomaret Gatot Subroto Mrican",
                            },
                            {
                                position: { lat: -7.78398607541717, lng: 112.00029775487566 },
                                title: "Indomaret Sersan Bahrun Mrican",
                            },
                        ];

                        // Loop untuk membuat dan menambahkan marker ke peta
                        for (var markerInf of marker) {
                            var marker = new google.maps.Marker({
                                position: markerInf.position,
                                map: map,
                                title: markerInf.title,
                            });

                            // Tambahkan event listener untuk menangani klik marker
                            marker.addListener("click", () => {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function (position) {
                                        // Dapatkan koordinat lokasi pengguna
                                        var userLoc = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude,
                                        };

                                        // Dapatkan koordinat marker yang diklik
                                        var destinasi = marker.getPosition().toUrlValue();

                                        // Buka Google Maps dengan arah dari lokasi pengguna ke tujuan
                                        window.open(
                                            `https://www.google.com/maps/dir/${userLoc.lat},${userLoc.lng}/${destinasi}`
                                        );
                                    });
                                } else {
                                    alert("Geolokasi tidak didukung oleh peramban Anda.");
                                }
                            });
                        }
                    }
                    google.maps.event.addDomListener(window, "load", initMapmojoroto);
                </script>
                </br>
                </br>
                <?php
                // konfigurasi koenksi ke DB
                $conn = mysqli_connect('localhost', 'root', '', 'indomaret');

                if (mysqli_connect_errno()) {
                    echo 'KONEKSI GAGAL' . mysqli_connect_error();
                    exit();
                }
                $query = "SELECT DISTINCT nama_lokasi,
        alamat,
        kelurahan
        FROM mojoroto";
                ?>
                <h3>List Indomaret Kecamatan Mojoroto</h3>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelurahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // membuat perulangan untuk menampilkan DB ke dalam element HTML
                        $result = mysqli_query($conn, $query);
                        $no = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $no++;
                                $nama_lokasi = $row["nama_lokasi"];
                                $alamat = $row["alamat"];
                                $kelurahan = $row["kelurahan"];
                                echo "
            <tr>
              <td>$no</td>
              <td>$nama_lokasi</td>
              <td>$alamat</td>
              <td>$kelurahan</td>
            </tr>
            ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- ===================================alfa mojoroto=================================== -->

            <div id="alfamojoroto">
                <script>
                    function dummy() { }
                    window.dummy = dummy;
                </script>

                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw&callback=dummy"></script>
                <div id="alfamapmojoroto"></div>
                <script>
                    function initMapmojoroto() {
                        // Inisialisasi peta dengan lokasi awal yang ditentukan
                        var initLocation = { lat: -7.804341023077927, lng: 111.99901874589823 };
                        var map = new google.maps.Map(document.getElementById("alfamapmojoroto"), {
                            center: initLocation,
                            zoom: 13,
                        });

                        // Array objek dengan informasi marker
                        var marker = [
                            {
                                position: { lat: -7.828380679225622, lng: 111.9866824668716 },
                                title: "Alfamart Tamanan",
                            },
                            {
                                position: { lat: -7.808026415610315, lng: 112.00197353967584 },
                                title: "Alfamart Kawi",
                            },
                            {
                                position: { lat: -7.8086229355744265, lng: 112.00463390493992 },
                                title: "Alfamart Mojoroto",
                            },
                            {
                                position: { lat: -7.8264154439389335, lng: 112.00506926690075 },
                                title: "Alfamart Agus Salim",
                            },
                            {
                                position: { lat: -7.807799986766888, lng: 111.98346219869657 },
                                title: "Alfamart Jl. Mastrip",
                            },
                            {
                                position: { lat: -7.815429056209222, lng: 111.98906323412054 },
                                title: "Alfamart Dr. Saharjo",
                            },
                            {
                                position: { lat: -7.781459700157066, lng: 112.00036962311403 },
                                title: "Alfamart Mrican",
                            },
                        ];

                        // Loop untuk membuat dan menambahkan marker ke peta
                        for (var markerInf of marker) {
                            var marker = new google.maps.Marker({
                                position: markerInf.position,
                                map: map,
                                title: markerInf.title,
                            });

                            // Tambahkan event listener untuk menangani klik marker
                            marker.addListener("click", () => {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function (position) {
                                        // Dapatkan koordinat lokasi pengguna
                                        var userLoc = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude,
                                        };

                                        // Dapatkan koordinat marker yang diklik
                                        var destinasi = marker.getPosition().toUrlValue();

                                        // Buka Google Maps dengan arah dari lokasi pengguna ke tujuan
                                        window.open(
                                            `https://www.google.com/maps/dir/${userLoc.lat},${userLoc.lng}/${destinasi}`
                                        );
                                    });
                                } else {
                                    alert("Geolokasi tidak didukung oleh peramban Anda.");
                                }
                            });
                        }
                    }
                    google.maps.event.addDomListener(window, "load", initMapmojoroto);
                </script>
                </br>
                </br>
                <?php
                // konfigurasi koenksi ke DB
                $conn = mysqli_connect('localhost', 'root', '', 'alfamart');

                if (mysqli_connect_errno()) {
                    echo 'KONEKSI GAGAL' . mysqli_connect_error();
                    exit();
                }
                $query = "SELECT DISTINCT nama_lokasi,
        alamat,
        kelurahan
        FROM mojoroto";
                ?>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelurahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // membuat perulangan untuk menampilkan DB ke dalam element HTML
                        $result = mysqli_query($conn, $query);
                        $no = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $no++;
                                $nama_lokasi = $row["nama_lokasi"];
                                $alamat = $row["alamat"];
                                $kelurahan = $row["kelurahan"];
                                echo "
            <tr>
              <td>$no</td>
              <td>$nama_lokasi</td>
              <td>$alamat</td>
              <td>$kelurahan</td>
            </tr>
            ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!--===================================Kecamatan Pesantren===================================-->
            <!--=================================== indomaret ===================================-->
            <div id="indopesantren">
                <script>
                    function dummy2() { }
                    window.dummy2 = dummy2;
                </script>

                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw&callback=dummy2"></script>
                <div id="idnmappesantren"></div>
                <script>
                    function initMappesantren() {
                        // Inisialisasi peta dengan lokasi awal yang ditentukan
                        var initialLocation1 = { lat: -7.829347670572409, lng: 112.02491041750754 };
                        var mappesantren = new google.maps.Map(document.getElementById("idnmappesantren"), {
                            center: initialLocation1,
                            zoom: 13.5,
                        });

                        // Array objek dengan informasi marker
                        var markerpesantren = [
                            {
                                position: { lat: -7.828111511796928, lng: 112.01758094900144 },
                                title: "Indomaret Kilisuci",
                            },
                            {
                                position: { lat: -7.828307588315349, lng: 112.03571160919843 },
                                title: "Indomaret Mauni Kediri",
                            },
                            {
                                position: { lat: -7.833702255496926, lng: 112.04855545750881 },
                                title: "Indomaret Pesantren",
                            },
                            {
                                position: { lat: -7.824478838198158, lng: 112.02750255074503 },
                                title: "Indomaret Letjen Sutoyo Kediri",
                            },
                        ];

                        // Loop untuk membuat dan menambahkan marker ke peta
                        for (var markerInfo1 of markerpesantren) {
                            var marker = new google.maps.Marker({
                                position: markerInfo1.position,
                                map: mappesantren,
                                title: markerInfo1.title,
                            });

                            // Tambahkan event listener untuk menangani klik marker
                            marker.addListener("click", () => {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function (position) {
                                        // Dapatkan koordinat lokasi pengguna
                                        var userLocation = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude,
                                        };

                                        // Dapatkan koordinat marker yang diklik
                                        var destination = marker.getPosition().toUrlValue();

                                        // Buka Google Maps dengan arah dari lokasi pengguna ke tujuan
                                        window.open(
                                            `https://www.google.com/maps/dir/${userLocation.lat},${userLocation.lng}/${destination}`
                                        );
                                    });
                                } else {
                                    alert("Geolokasi tidak didukung oleh peramban Anda.");
                                }
                            });
                        }
                    }
                    google.maps.event.addDomListener(window, "load", initMappesantren);
                </script>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw"></script>
                </br>
                </br>
                <h3>List Indomaret Kecamatan Pesantren</h3>
                <?php
                // konfigurasi koenksi ke DB
                $conn = mysqli_connect('localhost', 'root', '', 'indomaret');

                if (mysqli_connect_errno()) {
                    echo 'KONEKSI GAGAL' . mysqli_connect_error();
                    exit();
                }
                $query = "SELECT DISTINCT nama_lokasi,
                            alamat,
                            kelurahan
                            FROM pesantren";
                ?>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelurahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // membuat perulangan untuk menampilkan DB ke dalam element HTML
                        $result = mysqli_query($conn, $query);
                        $no = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $no++;
                                $nama_lokasi = $row["nama_lokasi"];
                                $alamat = $row["alamat"];
                                $kelurahan = $row["kelurahan"];
                                echo "
            <tr>
              <td>$no</td>
              <td>$nama_lokasi</td>
              <td>$alamat</td>
              <td>$kelurahan</td>
            </tr>
            ";
                            }
                        }
                        ?>
                    </tbody>
                </table>

            </div>
            <!--=================================== alfamart ===================================-->
            <div id="alfapesantren">
                <script>
                    function dummy2() { }
                    window.dummy2 = dummy2;
                </script>

                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw&callback=dummy2"></script>
                <div id="mappesantrenalfa"></div>
                <script>
                    function initMappesantren() {
                        // Inisialisasi peta dengan lokasi awal yang ditentukan
                        var initialLocation1 = { lat: -7.829347670572409, lng: 112.02491041750754 };
                        var mappesantren = new google.maps.Map(document.getElementById("mappesantrenalfa"), {
                            center: initialLocation1,
                            zoom: 13.5,
                        });

                        // Array objek dengan informasi marker
                        var markerpesantren = [
                            {
                                position: { lat: -7.830758615391627, lng: 112.04587058660734 },
                                title: "Alfamart Mauni",
                            },
                            {
                                position: { lat: -7.832780558736911, lng: 112.05167380147536 },
                                title: "Alfamart Imam Bakri",
                            },
                            {
                                position: { lat: -7.863872094152294, lng: 112.02859750080779 },
                                title: "Alfamart Kapten Tendean",
                            },
                        ];

                        // Loop untuk membuat dan menambahkan marker ke peta
                        for (var markerInfo1 of markerpesantren) {
                            var marker = new google.maps.Marker({
                                position: markerInfo1.position,
                                map: mappesantren,
                                title: markerInfo1.title,
                            });

                            // Tambahkan event listener untuk menangani klik marker
                            marker.addListener("click", () => {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function (position) {
                                        // Dapatkan koordinat lokasi pengguna
                                        var userLocation = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude,
                                        };

                                        // Dapatkan koordinat marker yang diklik
                                        var destination = marker.getPosition().toUrlValue();

                                        // Buka Google Maps dengan arah dari lokasi pengguna ke tujuan
                                        window.open(
                                            `https://www.google.com/maps/dir/${userLocation.lat},${userLocation.lng}/${destination}`
                                        );
                                    });
                                } else {
                                    alert("Geolokasi tidak didukung oleh peramban Anda.");
                                }
                            });
                        }
                    }
                    google.maps.event.addDomListener(window, "load", initMappesantren);
                </script>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw"></script>
                </br>
                </br>
                <h3>List Alfamart Kecamatan Pesantren</h3>
                <table class="table table-striped table-bordered table-hover">
                    <?php
                    // konfigurasi koenksi ke DB
                    $conn = mysqli_connect('localhost', 'root', '', 'alfamart');

                    if (mysqli_connect_errno()) {
                        echo 'KONEKSI GAGAL' . mysqli_connect_error();
                        exit();
                    }
                    $query = "SELECT DISTINCT nama_lokasi,
        alamat,
        kelurahan
        FROM pesantren";
                    ?>
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // membuat perulangan untuk menampilkan DB ke dalam element HTML
                            $result = mysqli_query($conn, $query);
                            $no = 0;

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $no++;
                                    $nama_lokasi = $row["nama_lokasi"];
                                    $alamat = $row["alamat"];
                                    $kelurahan = $row["kelurahan"];
                                    echo "
            <tr>
              <td>$no</td>
              <td>$nama_lokasi</td>
              <td>$alamat</td>
              <td>$kelurahan</td>
            </tr>
            ";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
            </div>

            <!--===================================Kecamatan Kota===================================-->
            <!-- ===================================indomaret=================================== -->
            <div id="indokota">
                <script>
                    function dummy1() { }
                    window.dummy1 = dummy1;
                </script>

                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw&callback=dummy1"></script>
                <div id="mapkota"></div>
                <script>
                    function initMapkota() {
                        // Inisialisasi peta dengan lokasi awal yang ditentukan
                        var initialLocation = { lat: -7.829347670572409, lng: 112.02491041750754 };
                        var mapkota = new google.maps.Map(document.getElementById("mapkota"), {
                            center: initialLocation,
                            zoom: 13.5,
                        });

                        // Array objek dengan informasi marker
                        var markerkota = [
                            {
                                position: { lat: -7.8508784867052395, lng: 112.02957282817553 },
                                title: "Indomaret Ngronggo",
                            },
                            {
                                position: { lat: -7.814801207522401, lng: 112.03417007278148 },
                                title: "Indomaret Doko Indah",
                            },
                            {
                                position: { lat: -7.810980514994962, lng: 112.02391880226132 },
                                title: "Indomaret Selowareh Ngadirejo",
                            },
                            {
                                position: { lat: -7.818422494613062, lng: 112.01904945765298 },
                                title: "Indomaret Joyoboyo",
                            },
                            {
                                position: { lat: -7.845854320725291, lng: 112.00712518527371 },
                                title: "Indomaret Sersan Suharmaji",
                            },
                        ];

                        // Loop untuk membuat dan menambahkan marker ke peta
                        for (var markerInfo of markerkota) {
                            var marker = new google.maps.Marker({
                                position: markerInfo.position,
                                map: mapkota,
                                title: markerInfo.title,
                            });

                            // Tambahkan event listener untuk menangani klik marker
                            marker.addListener("click", () => {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function (position) {
                                        // Dapatkan koordinat lokasi pengguna
                                        var userLocation = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude,
                                        };

                                        // Dapatkan koordinat marker yang diklik
                                        var destination = marker.getPosition().toUrlValue();

                                        // Buka Google Maps dengan arah dari lokasi pengguna ke tujuan
                                        window.open(
                                            `https://www.google.com/maps/dir/${userLocation.lat},${userLocation.lng}/${destination}`
                                        );
                                    });
                                } else {
                                    alert("Geolokasi tidak didukung oleh peramban Anda.");
                                }
                            });
                        }
                    }
                    google.maps.event.addDomListener(window, "load", initMapkota);
                </script>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw"></script>
                </br>
                </br>
                <h3>List Indomaret Kecamatan Kota</h3>
                <?php
                // konfigurasi koenksi ke DB
                $conn = mysqli_connect('localhost', 'root', '', 'indomaret');

                if (mysqli_connect_errno()) {
                    echo 'KONEKSI GAGAL' . mysqli_connect_error();
                    exit();
                }
                $query = "SELECT DISTINCT nama_lokasi,
        alamat,
        kelurahan
        FROM kota";
                ?>
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Kelurahan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // membuat perulangan untuk menampilkan DB ke dalam element HTML
                        $result = mysqli_query($conn, $query);
                        $no = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $no++;
                                $nama_lokasi = $row["nama_lokasi"];
                                $alamat = $row["alamat"];
                                $kelurahan = $row["kelurahan"];
                                echo "
            <tr>
              <td>$no</td>
              <td>$nama_lokasi</td>
              <td>$alamat</td>
              <td>$kelurahan</td>
            </tr>
            ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- ===================================alfamart=================================== -->

            <div id="alfakota">
                <script>
                    function dummy1() { }
                    window.dummy1 = dummy1;
                </script>

                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw&callback=dummy1"></script>
                <div id="mapkotaalfa"></div>
                <script>
                    function initMapkota() {
                        // Inisialisasi peta dengan lokasi awal yang ditentukan
                        var initialLocation = { lat: -7.829347670572409, lng: 112.02491041750754 };
                        var mapkota = new google.maps.Map(document.getElementById("mapkotaalfa"), {
                            center: initialLocation,
                            zoom: 13.5,
                        });

                        // Array objek dengan informasi marker
                        var markerkota = [
                            {
                                position: { lat: -7.843077806481376, lng: 112.00860322252969 },
                                title: "Alfamart Urip Sumoharjo",
                            },
                            {
                                position: { lat: -7.843222901822769, lng: 112.02498552490748 },
                                title: "Alfamart Super Semar",
                            },
                            {
                                position: { lat: -7.8456661805845345, lng: 112.03258039289383 },
                                title: "Alfamart Betet Bawang",
                            },
                            {
                                position: { lat: -7.834670758007238, lng: 112.00947203910683 },
                                title: "Alfamart Ngronggo",
                            },
                            {
                                position: { lat: -7.828038238957005, lng: 112.01705641802718 },
                                title: "Alfamart Kilisuci",
                            },
                            {
                                position: { lat: -7.823975050613908, lng: 112.02842289874994 },
                                title: "Alfamart Letjen Sutoyo",
                            },
                            {
                                position: { lat: -7.820296649438336, lng: 112.02795016091359 },
                                title: "Alfamart Letjen Suprapto",
                            },
                            {
                                position: { lat: -7.803839706254827, lng: 112.0087671601588 },
                                title: "Alfamart Mayjend Sungkono",
                            },
                            {
                                position: { lat: -7.820275621759995, lng: 112.01710865918066 },
                                title: "Alfamart Patiunus",
                            },
                        ];

                        // Loop untuk membuat dan menambahkan marker ke peta
                        for (var markerInfo of markerkota) {
                            var marker = new google.maps.Marker({
                                position: markerInfo.position,
                                map: mapkota,
                                title: markerInfo.title,
                            });

                            // Tambahkan event listener untuk menangani klik marker
                            marker.addListener("click", () => {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(function (position) {
                                        // Dapatkan koordinat lokasi pengguna
                                        var userLocation = {
                                            lat: position.coords.latitude,
                                            lng: position.coords.longitude,
                                        };

                                        // Dapatkan koordinat marker yang diklik
                                        var destination = marker.getPosition().toUrlValue();

                                        // Buka Google Maps dengan arah dari lokasi pengguna ke tujuan
                                        window.open(
                                            `https://www.google.com/maps/dir/${userLocation.lat},${userLocation.lng}/${destination}`
                                        );
                                    });
                                } else {
                                    alert("Geolokasi tidak didukung oleh peramban Anda.");
                                }
                            });
                        }
                    }
                    google.maps.event.addDomListener(window, "load", initMapkota);
                </script>
                </br>
                </br>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMZNueDH2SvMOsnjLCcny_qJKHBcUvUPw"></script>
                <h3>List Alfamart Kecamatan Kota</h3>
                <table class="table table-striped table-bordered table-hover">
                    <?php
                    // konfigurasi koenksi ke DB
                    $conn = mysqli_connect('localhost', 'root', '', 'alfamart');

                    if (mysqli_connect_errno()) {
                        echo 'KONEKSI GAGAL' . mysqli_connect_error();
                        exit();
                    }
                    $query = "SELECT DISTINCT nama_lokasi,
        alamat,
        kelurahan
        FROM kota";
                    ?>
                    <table class="table table-striped table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelurahan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // membuat perulangan untuk menampilkan DB ke dalam element HTML
                            $result = mysqli_query($conn, $query);
                            $no = 0;

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $no++;
                                    $nama_lokasi = $row["nama_lokasi"];
                                    $alamat = $row["alamat"];
                                    $kelurahan = $row["kelurahan"];
                                    echo "
            <tr>
              <td>$no</td>
              <td>$nama_lokasi</td>
              <td>$alamat</td>
              <td>$kelurahan</td>
            </tr>
            ";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </section>


    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 mx-5">
                    <img src="images/dp1.png" class=" footer-imgae" alt="">
                </div>
                <div class="f-line"></div>

                <div class="col-lg-3 " data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4 text-white">Kantor Kami</h4>
                    <p class="mb-0 footer-text text-white mx-3">
                        <i class="fa fa-home mr-2 footer-icon text-white">
                        </i>
                        Jl. Penanggungan NO. 7, Bandar Lor, Kec. Mojoroto, Kota Kediri, Jawa Timur
                    </p>
                </div>
                <div class="col-lg-3 text-left" data-aos="fade-up" data-aos-delay="200">

                    <h4 class="my-4 text-white">Hubungi Kami</h4>

                    <p class="text-left text-white">
                        <i class="fa fa-phone footer-icon"></i>
                        +99 080 070 4224
                    </p>

                    <p class="text-white text-left">
                        <a href="#" class="text-white">
                            <i class="fa fa-envelope footer-icon"></i>
                            DISSSSttttt@gmail.com
                        </a>
                    </p>
                    <p>
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-instagram text-white"></a></li>
                        <li><a href="#" class="fa fa-twitter text-white"></a></li>
                    </ul>
                    </p>
                </div>
                <div class="f-line"></div>
                <div class="col">
                    <p class="text-white text-left">Statistik</p>
                    <div class="px-0">
                        <i class="fa text-white">
                            <?php
                            // koneksi
                            $conn = mysqli_connect('localhost', 'root', '', 'db_dispendagrin');

                            // pilih database
                            $count_query = mysqli_query($conn, "SELECT * FROM tb_counter");

                            // logika
                            if ($count_query) {
                                $row = mysqli_fetch_array($count_query);
                                $current_count = $row['counts'];
                                $new_count = $current_count + 1;
                                $update_count = mysqli_query($conn, "UPDATE tb_counter SET counts = '" . $new_count . "'");
                                echo $new_count;
                            } else {
                                echo "Error: " . mysqli_error($conn);
                            }

                            // close connection
                            mysqli_close($conn);
                            ?>
                            /Hari
                        </i>
                    </div>
                </div>
            </div>

        </div>

        <div class="mx-auto Copyright">
            <p class="copyright-text mt-5 text-white">Copyright &copy; 2023 DISPERDAGIN
                <br>
        </div>
    </footer>

    <!-- SCRIPTS -->
    <script>
        var currentlyVisible = null;

        function show(id) {
            var x = document.getElementById(id);

            if (currentlyVisible) {
                currentlyVisible.style.display = "none";
            }

            if (x.style.display === "none" || !x.style.display) {
                x.style.display = "block";
                currentlyVisible = x;
            } else {
                x.style.display = "none";
                currentlyVisible = null;
            }
        }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/transition.js"></script>
    <script src="js/loader.js"></script>

</body>

</html>