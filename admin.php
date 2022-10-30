<?php
require 'koneksi.php';

$admin = query("SELECT * FROM admin");
?>


<?php include("tema.php") ?>
<!-- NAVBAR -->
<?php $halaman = "Data Admin"; ?>


<!-- CONTENT -->
<div class="content">
     <div class="judul_content"><?= $halaman; ?></div>
     <div class="tambah">
          <a href="">
               <button class="btn btn-primary">Tambah Data</button>
          </a>
     </div>
     <div class="isi_content">
          <div class="sub_judul_content">
               daftar data Admin
          </div>
          <div class="tabel">
               <table id="dataTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                              <th class="th-sm">No</th>
                              <th class="th-sm">Nama</th>
                              <th class="th-sm">Alamat</th>
                              <th class="th-sm">Email</th>
                              <th class="th-sm">Telpon</th>
                              <th class="th-sm">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php $a = 1;
                         foreach ($admin as $adm) : ?>
                         <tr>
                              <td><?= $a; ?></td>
                              <td><?= $adm["nama"]; ?></td>
                              <td><?= $adm["alamat"]; ?></td>
                              <td><?= $adm["email"]; ?></td>
                              <td><?= $adm["telp"]; ?></td>
                              <td>
                                   <button class="btn btn-success">Edit</button>
                                   <button class="btn btn-danger">Hapus</button>
                              </td>
                         </tr>
                         <?php $a++ ?>
                         <?php endforeach ?>

                    </tbody>
               </table>
          </div>
     </div>
</div>
<?php include("footer.php") ?>