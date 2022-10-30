<?php

require 'koneksi.php';

if (isset($_POST["Register"])) {

     if (registrasi($_POST) > 0) {

          echo "
          <script>
          
          alert('Selamat... Akun Berhasil Di buat!');
          document.location.href='login.php'
          
          </script>
          ";
     } else {
          echo mysqli_error($conn);
     }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="login.css">
     <title>Sing Up</title>
</head>

<body>

     <div class="center">

          <h1>Sing Up</h1>


          <form method="post" action=" ">

               <div class="text_filed">
                    <input type="text" name="username" required>
                    <span></span>
                    <label for="username">Username</label>
               </div>

               <div class="text_filed">
                    <input type="password" name="password" required>
                    <span></span>
                    <label for="password">Password</label>
               </div>
               <div class="text_filed">
                    <input type="password" name="password2" required>
                    <span></span>
                    <label for="password2">Confirmation Password</label>
               </div>



               <input type="submit" value="Registrasi" name="Register" style="margin-bottom:20px ;">


          </form>

     </div>

</body>

</html>