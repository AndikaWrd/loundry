<?php
require 'koneksi.php';

$pelanggan = query("SELECT * FROM pelanggan")

?>

<?php include("tema.php") ?>
<!-- NAVBAR -->
<?php $halaman = "Data Konsumen"; ?>

<title><?= $halaman; ?></title>
<!-- CONTENT -->
<div class="content">
     <div class="judul_content"><?= $halaman; ?></div>
     <div class="tambah">
          <a href="tambah_konsumen.php">
               <button class="btn btn-primary">Tambah Data</button>
          </a>
     </div>
     <div class="isi_content">
          <div class="sub_judul_content">
               daftar <?= $halaman; ?>
          </div>
          <div class="tabel">
               <table id="dataTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                              <th class="th-sm">No
                              </th>
                              <th class="th-sm">Kode Pelanggan
                              </th>
                              <th class="th-sm">Nama
                              </th>
                              <th class="th-sm">Telpon
                              </th>
                              <th class="th-sm">Alamat
                              </th>

                              <th class="th-sm">Aksi</th>
                         </tr>
                    </thead>
                    <tbody>

                         <?php $a = 1; ?>
                         <?php foreach ($pelanggan as $plg) : ?>
                         <tr>
                              <td><?= $a; ?></td>
                              <td><?= $plg["kd_konsumen"]; ?></td>
                              <td><?= $plg["nama"]; ?></td>
                              <td><?= $plg["telp"]; ?></td>
                              <td><?= $plg["alamat"]; ?></td>
                              <td>
                                   <a href="edit_konsumen.php?id=<?= $plg["id"]; ?>"> <button class="btn btn-success">
                                             Edit</button></a>
                                   <a href="hapus_konsumen.php?id=<?= $plg["id"]; ?>"><button
                                             class="btn btn-danger">Hapus</button></a>
                              </td>
                         </tr>
                         <?php $a++; ?>
                         <?php endforeach ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>
<?php include("footer.php") ?>