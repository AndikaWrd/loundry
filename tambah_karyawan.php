<?php
include("tema.php");
require("koneksi.php");
?>
<?php $halaman = "Tambah Data Karyawan"; ?>

<title><?= $halaman; ?></title>


<?php
if (isset($_POST["submit"])) {
     if (tambah_karyawan($_POST) > 0) {
          echo "
          <script>
               alert('Data Berhasil Ditambahkan');
               document.location.href ='karyawan.php'
          </script> 
     ";
     } else {
          echo "
          <script>
               alert('Data Berhasil Ditambahkan');
               document.location.href ='karyawan.php'
          </script>
     ";
     }
}

?>

<!-- CONTENT -->
<div class="content">
     <div class="judul_content"><?= $halaman; ?></div>
     <div class="tambah">
     </div>

     <div class="isi_content">
          <div class="sub_judul_content">
               Tambah data karyawan
          </div>
          <div class="tabel">
               <form action="" method="POST" class="form">

                    <div class="judul-form"><span>masukan data karyawan</span></div>
                    <div class="kotak">

                         <label for="nama">Nama Karyawan</label>
                         <input type="text" name="nama" id="nama" autofocus required>
                    </div>

                    <div class="kotak">
                         <label for="telp">Telpon</label>
                         <input type="text" name="telp" id="telp" required>

                    </div>

                    <div class="kotak">
                         <label for="email">Email</label>
                         <input type="text" name="email" id="telp" required>

                    </div>
                    <div class="kotak">
                         <label for="alamat">Alamat</label>
                         <textarea name="alamat" id="" cols="115%" rows="5" id="alamat" required></textarea>

                    </div>


                    <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
               </form>
          </div>
     </div>
</div>
<?php include("footer.php") ?>