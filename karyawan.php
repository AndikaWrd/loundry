<?php
require 'koneksi.php';

$karyawan = query("SELECT * FROM karyawan");

?>


<?php include("tema.php") ?>
<!-- NAVBAR -->
<?php $halaman = "Data Karyawan"; ?>

<title><?= $halaman; ?></title>

<!-- CONTENT -->
<div class="content">
     <div class="judul_content"><?= $halaman; ?></div>
     <div class="tambah">
          <a href="tambah_karyawan.php">
               <button class="btn btn-primary">Tambah Data</button>
          </a>
     </div>
     <div class="isi_content">
          <div class="sub_judul_content">
               daftar data Karyawan
          </div>
          <div class="tabel">
               <table id="dataTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                              <th class="th-sm">No</th>
                              <th class="th-sm">Nama</th>

                              <th class="th-sm">Telpon</th>
                              <th class="th-sm">Email</th>
                              <th class="th-sm">Alamat</th>
                              <th class="th-sm">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php $a = 1;
                         foreach ($karyawan as $kry) : ?>
                         <tr>
                              <td><?= $a; ?></td>
                              <td><?= $kry["nama"]; ?></td>
                              <td><?= $kry["telp"]; ?></td>
                              <td><?= $kry["email"]; ?></td>
                              <td><?= $kry["alamat"]; ?></td>
                              <td>
                                   <a href="edit_karyawan.php?id=<?= $kry["id"]; ?>"><button
                                             class="btn btn-success">Edit</button></a>
                                   <a href="hapus_karyawan.php?id=<?= $kry["id"]; ?>"> <button
                                             class="btn btn-danger">Hapus</button>
                              </td></a>
                         </tr>
                         <?php $a++ ?>
                         <?php endforeach ?>

                    </tbody>
               </table>
          </div>
     </div>
</div>
<?php include("footer.php") ?>