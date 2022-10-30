<?php
include("tema.php");
require("koneksi.php");

$id = $_GET["id"];


$kry = query("SELECT * FROM karyawan WHERE id = $id")[0];



?>
<?php $halaman = "Data Karyawan"; ?>

<title><?= $halaman; ?></title>


<?php
if (isset($_POST["submit"])) {
     if (edit_karyawan($_POST) > 0) {
          echo "
          <script>
               alert('Data Berhasil Diperbarui');
               document.location.href ='karyawan.php'
          </script> 
     ";
     } else {
          echo "
          <script>
               alert('Data Gagal Diperbarui');
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
               Edit <?= $halaman; ?>
          </div>
          <div class="tabel">
               <form action="" method="POST" class="form">
                    <input type="hidden" name="id" value="<?= $kry["id"]; ?>">
                    <div class="kotak">

                         <label for="nama">Nama Karyawan</label>
                         <input type="text" name="nama" id="nama" value="<?= $kry["nama"]; ?>" required>
                    </div>
                    <div class="kotak">

                         <label for="telp">Telpon</label>
                         <input type="text" name="telp" id="telp" value="<?= $kry["telp"]; ?>" required>

                    </div>
                    <div class="kotak">

                         <label for="email">Email</label>
                         <input type="text" name="email" id="telp" value="<?= $kry["email"]; ?>" required>

                    </div>


                    <div class="kotak">
                         <label for="alamat">Alamat</label>
                         <textarea name="alamat" id="" cols="115%" rows="5" id="alamat"
                              required><?= $kry["alamat"]; ?></textarea>

                    </div>


                    <button type="submit" name="submit" class="btn btn-primary">Upadte Data</button>
               </form>
          </div>
     </div>
</div>
<?php include("footer.php") ?>