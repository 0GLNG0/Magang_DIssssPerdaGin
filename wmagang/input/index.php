<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Document</title>

</head>

<body>
    <!-- header -->
    <nav class="navbar " id="navbar">
        <div class="container-fluid" id="container-fluid">
            <a class="navbar-brand" href="main.php">
                <img src="img/logo/lpicon2.png" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <button class="btn-logout" onclick="logout()">Logout</button>
        </div>
        <!-- <div id="container-fluid"> -->
        </div>
    </nav>
    <div class="line" id="line-navbar"></div>

    <?php
    session_start();
    if (isset($_SESSION['success_message'])) {
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    var floatingMessage = document.createElement("div");
                    floatingMessage.className = "floating-message";
                    floatingMessage.textContent = "' . $_SESSION['success_message'] . ',";

                    document.body.appendChild(floatingMessage);

                    setTimeout(function() {
                        document.body.removeChild(floatingMessage);
                    }, 3000);
                });
            </script>';
        unset($_SESSION['success_message']);
    }
    ?>

    <div class="container px-4 text-center">
        <div class="row gx-5">
            <img src="img/logo/d1.png" alt="">
        </div>
    </div>
    <form action="inputData.php" method="post" onsubmit="return validateForm()">
        <div class="card">
            <div class="card-title">
                <h1 class="title">Form Input Data</h1>
                <div class="line"></div>
            </div>
            <table>
                <tr>
                    <td>
                        Tanggal
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <?php
                            $tanggalHariIni = date("Y-m-d");
                            ?>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="<?php echo $tanggalHariIni; ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nama Barang
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <select name="barang" id="barang" class="form-select">
                                <option value="pilih-komoditas" style="font-size: 1.5rem">Pilih Komoditas</option>
                                <?php
                                // Array hewan
                                $barang_array = array('Beras Premium', 'Beras Medium', 'Gula Kristal Putih', 'Minyak Goreng Curah', 'Minyak Goreng Kemasan Premium', 'Minyak Goreng Kemasan Sederhana', 'Minyak Goreng MINYAKITA', 'Daging Sapi Paha Belakang', 'Daging Ayam Ras', 'Daging Ayam Kampung', 'Telur Ayam Ras', 'Telur Ayam Kampung', 'Susu Kental Manis Merk Bendera', 'Susu Kental Manis Merk Indomilk', 'Susu Bubuk Merk Bendera (Instant)', 'Susu Bubuk Merk Indomilk (Instant)', 'Jagung Pipilan Kering', 'Garam Beryodium Bata', 'Garam Beryodium Halus', 'Terigu Protein Sedang(Kemasan)', 'Kedelai Impor', 'Kedelai Lokal', 'Indomie Rasa Kari Ayam', 'Cabe Merah Keriting', 'Cabe Merah Besar', 'Cabe Rawit Merah', 'Bawang Merah', 'Bawang Putih Sinco/Honan', 'Ikan Asin Teri', 'Kacang Hijau', 'Kacang Tanah', 'Ketela Pohon', 'Kol/Kubis', 'Kentang', 'Tomat Merah', 'Wortel', 'Buncis', 'Ikan Bandeng', 'Ikan Kembung', 'Ikan Tongkol', 'Ikan Tuna', 'Ikan Cakalang', 'Gas LPG 3kg');

                                // Loop untuk menampilkan opsi
                                foreach ($barang_array as $komoditas) {
                                    echo "<option value='$komoditas'>$komoditas</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr id="harga">
                    <td>
                        Harga Lama
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" name="harga_lama" id="harga_lama" class="form-control" aria-label="Amount" placeholder="Masukkan Harga Lama">
                        </div>
                    </td>
                </tr>
                <tr id="harga">
                    <td>
                        Harga Baru
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Rp</span>
                            <input type="text" name="harga_baru" id="harga_baru" class="form-control" aria-label="Amount" placeholder="Masukkan Harga Baru">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        Lokasi
                    </td>
                    <td>
                        <div class="input-group mb-3">
                            <select name="lokasi" id="lokasi" class="form-select">
                                <option value="pilih-lokasi">Pilih Lokasi</option>
                                <option value="Pasar Bandar">Pasar Bandar</option>
                                <option value="Pasar Pahing">Pasar Pahing</option>
                                <option value="Pasar Setono Betek">Pasar Setono Betek</option>
                            </select>
                        </div>
                    </td>

                </tr>
            </table>
            <div class="btn">
                <div class="col-12">
                    <input class="submit" name="submit" type="submit" value="Submit">
                    <input class="reset" name="reset" type="reset" value="Reset">
                </div>
            </div>
        </div>
    </form>

    <!-- footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 mx-lg-auto col-md-8 col-10">
                    <h1 data-aos="fade-up" data-aos-delay="100">
                        Disperdagin
                        <strong class="gradient-text"><br>Kota Kediri</strong>
                    </h1>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="200">
                    <h4 class="my-4">Contact Info</h4>

                    <p class="mb-1">
                        <i class="fa fa-phone mr-2 footer-icon"></i>
                        +99 080 070 4224
                    </p>

                    <p>
                        <a href="#">
                            <i class="fa fa-envelope mr-2 footer-icon"></i>
                            hello@company.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="300">
                    <h4 class="my-4">Kantor Kami</h4>

                    <p class="mb-1">
                        <i class="fa fa-home mr-2 footer-icon"></i>
                        Jl. Penanggungan NO. 7, Bandar Lor, Kec. Mojoroto, Kota Kediri, Jawa Timur
                    </p>
                </div>

                <div class="col-lg-4 mx-lg-auto text-center col-md-8 col-12" data-aos="fade-up" data-aos-delay="400">
                    <p class="copyright-text">Copyright &copy; 2023 DISPERDAGIN
                        <br>
                </div>

                <div class="col-lg-3 mx-lg-auto col-md-6 col-12" data-aos="fade-up" data-aos-delay="600">
                    <ul class="social-icon">
                        <li><a href="#" class="fa-brands fa-instagram"></a></li>
                        <li><a href="#" class="fa-brands fa-twitter"></a></li>
                        <li><a href="#" class="fa-brands fa-dribbble"></a></li>
                        <li><a href="#" class="fa-brands fa-behance"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </footer>

    <script>
        function validateForm() {
            var tanggal = document.getElementById('tanggal').value;
            var barang = document.getElementById('barang').value;
            var hargaLama = document.getElementById('harga_lama').value;
            var hargaBaru = document.getElementById('harga_baru').value;
            var lokasi = document.getElementById('lokasi').value;

            if (tanggal === "" || barang === "" || hargaLama === "" || hargaBaru === "" || lokasi === "pilih-lokasi") {
                // Display floating message
                var floatingMessage = document.createElement("div");
                floatingMessage.className = "floating-message";
                floatingMessage.textContent = "Data Tidak Boleh Kosong";

                document.body.appendChild(floatingMessage);

                setTimeout(function() {
                    document.body.removeChild(floatingMessage);
                }, 3000);

                return false;
            }

            return true;
        }
    </script>

    <script>
        function logout() {
            window.location.href = "main.php";
        }
    </script>


    <script src="js/script.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
</body>

</html>