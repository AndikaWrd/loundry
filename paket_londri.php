<?php include("tema.php") ?>
<!-- NAVBAR -->
<?php $halaman = "Data Paket Loundry"; ?>


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
               daftar <?= $halaman; ?>
          </div>
          <div class="tabel">
               <table id="dataTable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                    <thead>
                         <tr>
                              <th class="th-sm">Name
                              </th>
                              <th class="th-sm">Position
                              </th>
                              <th class="th-sm">Office
                              </th>
                              <th class="th-sm">Age
                              </th>
                              <th class="th-sm">Start date
                              </th>
                              <th class="th-sm">Salary
                              </th>
                         </tr>
                    </thead>
                    <tbody>
                         <tr>
                              <?php $no = 01; ?>
                              <td><?= $no; ?></td>
                              <td>System Architect</td>
                              <td>Edinburgh</td>
                              <td>61</td>
                              <td>2011/04/25</td>
                              <td>$320,800</td>
                         </tr>
                         <tr>

                              <td><?= $no; ?></td>
                              <td>Accountant</td>
                              <td>Tokyo</td>
                              <td>63</td>
                              <td>2011/07/25</td>
                              <td>$170,750</td>
                         </tr>

                         <?php $no++ ?>
                    </tbody>
               </table>
          </div>
     </div>
</div>
<?php include("footer.php") ?>