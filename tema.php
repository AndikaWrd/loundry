<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">


     <!-- datatables -->

     <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">




     <!-- style CSS -->
     <link rel="stylesheet" href="style.css">


     <!-- link bootstrap  4-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

     <!-- Link Boxicon CDN -->
     <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />

     <script type="text/javascript">
     function showTime() {
          var a_p = "";
          var today = new Date();
          var curr_hour = today.getHours();
          var curr_minute = today.getMinutes();
          var curr_second = today.getSeconds();

          if (curr_hour < 12) {
               a_p = "AM";
          } else {
               a_p = "PM";
          }

          if (curr_hour == 0) {
               curr_hour = 12;
          }
          if (curr_hour == 12) {
               curr_hour = curr_hour - 12;
          }

          curr_hour = checkTime(curr_hour);
          curr_minute = checkTime(curr_minute);
          curr_second = checkTime(curr_second);

          document.getElementById('time').innerHTML = curr_hour + " : " + curr_minute + " : " + curr_second + " " + a_p;

     }

     function checkTime(i) {
          var j = i;
          if (i < 10) {
               i = "0" + i;
          }
          return i;
     }

     setInterval(showTime, 500);
     </script>
</head>

<body>
     <div class="sidebar">
          <div class="logo">
               <a href="">
                    <i class='bx bxl-graphql'></i>
                    <span class="nama_logo">Links</span>
               </a>
          </div>
          <hr class="hr">

          <div class="menu_sidebar">
               <ul class="nav_link">
                    <li>
                         <a href="dashboard.php">
                              <i class='bx bx-grid-alt'></i>
                              <span class="link_nama">Dasboard</span>
                         </a>
                    </li>
                    <li>
                         <a href="karyawan.php">
                              <i class='bx bxs-user-voice'></i>
                              <span class="link_nama">Data Karyawan</span>
                         </a>
                    </li>
                    <li>
                         <a href="konsumen.php">
                              <i class='bx bxs-user-plus'></i>
                              <span class="link_nama">Data Konsumen</span>
                         </a>
                    </li>
                    <li>
                         <a href="paket_londri.php">
                              <i class='bx bx-menu'></i>
                              <span class="link_nama">Paket Loundry</span>
                         </a>
                    </li>
                    <li>
                         <a href="transaksi.php">
                              <i class='bx bx-trending-up'></i>
                              <span class="link_nama">Transaksi</span>
                         </a>
                    </li>
               </ul>
          </div>
     </div>



     <div class="main_content">


          <?php include("navbar.php") ?>


          <?php include("datatable.php") ?>