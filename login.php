<?php
require 'koneksi.php';

if (isset($_POST["login"])) {
     $username = $_POST["username"];
     $password = $_POST["password"];

     $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

     if (mysqli_num_rows($result) === 1) {

          // cek password
          $row = mysqli_fetch_assoc($result);
          if (password_verify($password, $row["password"])) {
               header("Location: dashboard.php");
               exit;
          }
     }

     $erorr = true;
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
     <title>Login</title>
</head>

<body>
     <?php
     if (isset($erorr)) {
          echo "
          <script>
          
          alert('Username atau Password Salah');
          document.location.href='login.php'
          
          </script>
          ";
     } ?>

     <div class="center">
          <h1>Login</h1>

          <form method="post" action="">
               <div class="text_filed">
                    <input type="text" name="username" required>
                    <span></span>
                    <label for="username">username</label>
               </div>

               <div class="text_filed">
                    <input type="password" name="password" required>
                    <span></span>
                    <label for="password">password</label>
               </div>

               <a href="" style="text-decoration: none;">
                    <div class="pass">forget password</div>
               </a>

               <input type="submit" name="login" value="login">

               <div class="singup_link">not have a Account? <a href="registrasi.php">Signup</a></div>
          </form>

     </div>

</body>

</html>