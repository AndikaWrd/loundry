<?php

require "koneksi.php";

$id = $_GET["id"];

if (hapus_karyawan($id) > 0) {
     echo "
     <script>
          alert('Data Berhasil Dihapus');
          document.location.href ='karyawan.php'
     </script>
";
} else {
     echo "
     <script>
          alert('Data Gagal Dihapus');
          document.location.href ='karyawan.php'
     </script>
";
}
