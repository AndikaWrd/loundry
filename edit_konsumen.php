<?php
include("tema.php");
require("koneksi.php");

$id = $_GET["id"];

$konsumen = query("SELECT * FROM pelanggan WHERE id = $id")[0];



?>
<?php $halaman = "Edit Data Konsumen"; ?>

<?php
if (isset($_POST["submit"])) {

     if (edit_konsumen($_POST) > 0) {
          echo "
               <script>
                    alert('Data Berhasil Diupdate');
                    document.location.href ='konsumen.php'
               </script>
          ";
     } else {
          echo "
               <script>
                    alert('Data Berhasil Diupdate');
                    document.location.href ='konsumen.php'
               </script>
          ";
     }
}

?>

<!-- CONTENT -->
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title><?= $halaman; ?></title>
</head>

<body>


     <div class="content">
          <div class="judul_content"><?= $halaman; ?></div>
          <div class="tambah">
          </div>

          <div class="isi_content">
               <div class="sub_judul_content">
                    <?= $halaman; ?>
               </div>
               <div class="tabel">
                    <form action="" method="POST" class="form">
                         <input type="hidden" name="id" id="id" value="<?= $konsumen["id"]; ?>">
                         <div class="kotak">
                              <label for="kode">Kode Konsumen</label>
                              <input type="text" name="kd_konsumen" id="kode" value="<?= $konsumen["kd_konsumen"]; ?>"
                                   required>

                         </div>
                         <div class="kotak">

                              <label for="nama">Nama Konsumen</label>
                              <input type="text" name="nama" id="nama" value="<?= $konsumen["nama"]; ?>" required>
                         </div>
                         <div class="kotak">

                              <label for="telp">Telpon</label>
                              <input type="text" name="telp" id="telp" value="<?= $konsumen["telp"]; ?>" required>

                         </div>
                         <div class="kotak">
                              <label for="alamat">Alamat</label>
                              <textarea name="alamat" id="" cols="115%" rows="5" id="alamat"
                                   required><?= $konsumen["alamat"]; ?></textarea>

                         </div>



                         <button type="submit" name="submit" class="btn btn-primary">Upadte Data</button>

                    </form>
               </div>
          </div>
     </div>
     <?php include("footer.php") ?>
</body>

</html>