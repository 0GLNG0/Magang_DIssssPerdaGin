<?php include "includes/header.php" ?>

<!-- Navbar -->
<?php include "includes/navigation.php" ?>

<div id="wrapper">

  <!-- Sidebar -->


  <div id="content-wrapper">

    <div class="container-fluid">
      <!-- Page Content -->
      <style>
        .floating-message {
          position: fixed;
          bottom: 20px;
          left: 50%;
          transform: translateX(-50%);
          background-color: green;
          color: white;
          padding: 10px 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
          z-index: 9999;
        }

        .floating-message-Error {
          position: fixed;
          bottom: 20px;
          left: 50%;
          transform: translateX(-50%);
          background-color: red;
          color: white;
          padding: 10px 20px;
          border: 1px solid #ccc;
          border-radius: 5px;
          z-index: 9999;
        }

        .input-group #tanggal,
        .input-group #lokasi,
        .input-group #harga,
        .input-group #barang {
          border: solid 1px #5f8671;
          border-radius: 5px;
        }

        .input-group span {
          background-color: #5f8671;
          border: solid 1px #5f8671;
          color: white;
        }

        .input-group #satuan {
          height: 38px;
          margin-top: 31px;
          border: solid 1px #5f8671;
          border-radius: 5px;
        }

        .btn .submit {
          background-color: #16cc2c;
          color: white;
          border: #16cc2c 1px solid;
          border-radius: 5px;
        }

        .btn .submit:hover {
          background-color: white;
          color: #16cc2c;
          cursor: pointer;
        }

        .btn .reset {
          background-color: #d12613;
          border: #d12613 1px solid;
          border-radius: 5px;
        }

        .btn .reset:hover {
          background-color: white;
          color: #d12613;
          cursor: pointer;
        }

        hr {
          width: 27%;
          border: solid 1px;
        }

        .card {
          border: none;
          margin-top: 2rem;
        }

        table {
          margin: auto 3rem auto 3rem;
        }
      </style>
      <center>
        <h2>Input Data Harga Komoditas</h2>
        <hr>
      </center>


      <form id="inputForm" action="action.php" method="POST" onsubmit="return validateForm()">
        <div class="card">
          <table>
            <tr style="display:flex;">
              <!-- <td>
                        Tanggal
                    </td> -->
              <td>
                <div class="input-group mb-3">
                  <?php
                  $tanggalHariIni = date("Y-m-d");
                  ?>
                  <input type="date" name="tanggal[]" id="tanggal" class="form-control" value="<?php echo $tanggalHariIni; ?>">
                </div>
              </td>
            </tr>
            <tr style="display:flex; margin-bottom: 2rem;">
              <!-- <td>
                        Lokasi
                    </td> -->
              <td>
                <div class="input-group mb-3">
                  <select name="lokasi[]" id="lokasi" class="form-select">
                    <option value="pilih-lokasi">Pilih Lokasi</option>
                    <option value="Pasar Bandar">Pasar Bandar</option>
                    <option value="Pasar Pahing">Pasar Pahing</option>
                    <option value="Pasar Setono Betek">Pasar Setono Betek</option>
                  </select>
                </div>
              </td>
            </tr>
            <?php
            $barang = array(
              "Beras Premium" => "https://i.ibb.co/DVqHBp7/beras.jpg",
              "Beras Medium" => "https://i.ibb.co/DVqHBp7/beras.jpg",
              "Gula Kristal Putih" => "https://i.ibb.co/5kMjGgd/gula-pasir.jpg",
              "Minyak Goreng Curah" => "https://i.ibb.co/Pcxb1Np/minyak-curah.png",
              "Minyak Goreng Kemasan Premium" => "https://i.ibb.co/Pcxb1Np/minyak-curah.png",
              "Minyak Goreng Kemasan Sederhana" => "https://i.ibb.co/Pcxb1Np/minyak-curah.png",
              "Minyak Goreng MINYAKITA" => "https://i.ibb.co/BcpGQht/minyakita.jpg",
              "Daging Sapi Paha Belakang" => "https://i.ibb.co/WgwJXnC/daging-sapi.png",
              "Daging Ayam Ras" => "https://i.ibb.co/3htc2Tf/daging-ayam-ras.png",
              "Daging Ayam Kampung" => "https://i.ibb.co/3htc2Tf/daging-ayam-ras.png",
              "Telur Ayam Ras" => "https://i.ibb.co/vwFpTbh/telur-ayam-ras.png",
              "Telur Ayam Kampung" => "https://i.ibb.co/ZS3GdYz/telur-ayam-kampung.png",
              "SKM Merk Bendera" => "https://i.ibb.co/zrM3Lr7/skm-bendera.jpg",
              "SKM Merk Indomilk" => "https://i.ibb.co/KyWcBsn/skm-indomilk.png",
              "Susu Bubuk Merk Bendera (Instant)" => "https://i.ibb.co/0J0ykZR/susu-bubuk-bendera.jpg",
              "Susu Bubuk Merk Indomilk (Instant)" => "https://i.ibb.co/5xXjSKM/susu-bubuk-indomilk.jpg",
              "Jagung Pipilan Kering" => "https://i.ibb.co/1z4RGDk/jagung-pipilan.png",
              "Garam Beryodium Bata" => "https://i.ibb.co/6PczM9g/garam-bata.jpg",
              "Garam Beryodium Halus" => "https://i.ibb.co/rdSQb47/garam-beryodium-halus.png",
              "Terigu Protein Sedang (Kemasan)" => "https://i.ibb.co/SQCBSdN/tepung-terigu.png",
              "Kedelai Impor" => "https://i.ibb.co/k85b001/kedelai-impor.png",
              "Kedelai Lokal" => "https://i.ibb.co/k85b001/kedelai-impor.png",
              "Indomie Rasa Kari Ayam" => "https://i.ibb.co/tPgZ4Rb/indomie-kari-ayam.jpg",
              "Cabe Merah Keriting" => "https://i.ibb.co/sWm7Nd2/cabe-keriting.jpg",
              "Cabe Merah Besar" => "https://i.ibb.co/g4BqcyQ/cabe-merah-besar.png",
              "Cabe Rawit Merah" => "https://i.ibb.co/ySqXYc6/cabe-rawit.png",
              "Bawang Merah" => "https://i.ibb.co/k0zTdLw/bawang-merah.png",
              "Bawang Putih Sinco/Honan" => "https://i.ibb.co/dWWN33t/bawang-putih.png",
              "Ikan Asin Teri" => "https://i.ibb.co/SdNdfH7/ikan-teri.png",
              "Kacang Hijau" => "https://i.ibb.co/1skwNb7/kacang-hijau.jpg",
              "Kacang Tanah" => "https://i.ibb.co/KmRtCT9/kacang-tanah.png",
              "Ketela Pohon" => "https://i.ibb.co/H44YRNG/ketela-pohon.jpg",
              "Kol/Kubis" => "https://i.ibb.co/fpPJTqV/kubis.png",
              "Kentang" => "https://i.ibb.co/2FJjrS1/kentang.jpg",
              "Tomat Merah" => "https://i.ibb.co/60WsCky/tomat.png",
              "Wortel" => "https://i.ibb.co/8NQwJSq/wortel.jpg",
              "Buncis" => "https://i.ibb.co/T2HvpbN/buncis.jpg",
              "Ikan Bandeng" => "https://i.ibb.co/CW9kt4X/bandeng.jpg",
              "Ikan Kembung" => "https://i.ibb.co/3FWjM5W/kembung.jpg",
              "Ikan Tuna" => "https://i.ibb.co/Jdzmh8s/tuna.png",
              "Ikan Tongkol" => "https://i.ibb.co/NKN5sHm/tongkol.jpg",
              "Ikan Cakalang" => "https://i.ibb.co/s35Wgg6/cakalang.jpg",
              "Gas LPG 3Kg" => "https://i.ibb.co/hXRqTxY/lpg.png"
            );

            $satuan = array("Kg", "3Kg", "1 Liter", "397 gr/kl", "390 gr/kl", "400 gr/dos", "Buah", "Bungkus");
            foreach ($barang as $item => $gambar) {
            ?>
              <tr>
                <td>
                  <div class="input-group">
                    <label for="barang"><?php echo $item; ?></label>
                    <input type="hidden" name="barang[]" id="barang" class="form-control" value="<?php echo $item; ?>">
                    <input type="hidden" name="gambar[]" value="<?php echo $gambar; ?>">

                  </div>
                  <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" name="harga_sekarang[]" id="harga" class="form-control" aria-label="Amount" placeholder="Masukkan Harga">
                  </div>
                </td>
                <td>
                  <div class="input-group mb-3">
                    <select name="satuan[]" id="satuan" class="form-select">
                      <option value="satuan">Pilih Satuan</option>
                      <?php
                      foreach ($satuan as $s) {
                        echo "<option value='$s'>$s</option>";
                      }
                      ?>
                    </select>
                  </div>
                </td>
              </tr>

            <?php
            }
            ?>

          </table>
          <div class="btn">

            <input class="submit" name="submit" type="submit" value="Submit">
            <input class="reset" name="reset" type="reset" value="Reset">

          </div>
        </div>
      </form>



    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<script>
  function validateForm() {
    var tanggal = document.getElementById('tanggal').value;
    var lokasi = document.getElementById('lokasi').value;
    var satuan = document.getElementById('satuan').value;
    var inputs = document.querySelectorAll('input[type="text"]');
    var filled = true;

    inputs.forEach(function(input) {
      if (input.value === '') {
        filled = false;
      }
    });

    if (tanggal === '' || lokasi === '' || satuan === '' || !filled) {
      // Jika ada field yang belum terisi
      var floatingError = document.createElement('div');
      floatingError.className = 'floating-message-Error';
      floatingError.innerText = 'Data tidak boleh kosong';
      document.body.appendChild(floatingError);
      setTimeout(function() {
        floatingError.remove();
      }, 3000); // Munculkan pesan error selama 3 detik
      return false; // Menghentikan pengiriman formulir
    } else {
      // Jika semua field sudah terisi
      var floatingSuccess = document.createElement('div');
      floatingSuccess.className = 'floating-message';
      floatingSuccess.innerText = 'Data berhasil disimpan';
      document.body.appendChild(floatingSuccess);
      setTimeout(function() {
        floatingSuccess.remove();
      }, 3000); // Munculkan pesan sukses selama 3 detik
      return true; // Lanjutkan pengiriman formulir
    }
  }
</script>

</div>
<!-- /#wrapper -->

<?php include "includes/footer.php" ?>