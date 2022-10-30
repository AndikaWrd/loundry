<?php

$conn = (mysqli_connect("localhost", "root", "", "londri"));

function query($query)
{
     global $conn;

     $result = mysqli_query($conn, $query);
     $rows = [];

     while ($row = mysqli_fetch_assoc($result)) {
          $rows[] = $row;
     }
     return $rows;
}

// FUNCTION TAMBAH

function tambah_konsumen($data)
{
     global $conn;
     $kd_konsumen = htmlspecialchars($data["kd_konsumen"]);
     $nama        = htmlspecialchars($data["nama"]);
     $telp        = htmlspecialchars($data["telp"]);
     $alamat      = htmlspecialchars($data["alamat"]);

     $query = "INSERT INTO pelanggan 
                    VALUES
                    ('','$kd_konsumen','$nama', '$alamat', '$telp')
                    ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}
function tambah_karyawan($data)
{
     global $conn;
     $nama        = htmlspecialchars($data["nama"]);
     $telp        = htmlspecialchars($data["telp"]);
     $email       = htmlspecialchars($data["email"]);
     $alamat      = htmlspecialchars($data["alamat"]);


     $query = "INSERT INTO karyawan 
                    VALUES
                    ('','$nama', '$telp','$email','$alamat')
                    ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}


// FUCTION HAPUS
function hapus_karyawan($id)
{
     global $conn;
     mysqli_query($conn, "DELETE FROM karyawan WHERE id = '$id';");

     return mysqli_affected_rows($conn);
}

function hapus_konsumen($id)
{
     global $conn;
     mysqli_query($conn, "DELETE FROM pelanggan WHERE id = '$id'");
     return mysqli_affected_rows($conn);
}


// FUCTION UPDATE

function  edit_konsumen($data)
{

     global $conn;
     $id          = $data["id"];
     $kd_konsumen = htmlspecialchars($data["kd_konsumen"]);
     $nama        = htmlspecialchars($data["nama"]);
     $alamat      = htmlspecialchars($data["alamat"]);
     $telp        = htmlspecialchars($data["telp"]);

     $query = " UPDATE pelanggan SET 
               kd_konsumen = '$kd_konsumen',
               nama        = '$nama',
               alamat      = '$alamat',
               telp        = '$telp'

               WHERE id = $id
                    ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}
function  edit_karyawan($data)
{
     global $conn;
     $id          = $data["id"];
     $nama        = htmlspecialchars($data["nama"]);
     $email       = htmlspecialchars($data["email"]);
     $telp        = htmlspecialchars($data["telp"]);
     $alamat      = htmlspecialchars($data["alamat"]);

     $query = "UPDATE karyawan SET 
          nama      = '$nama',
          email     = '$email',
          telp      = '$telp',
          alamat    = '$alamat'


          WHERE id = $id
          
     ";

     mysqli_query($conn, $query);

     return mysqli_affected_rows($conn);
}

// FUNCTION REGISRTRASI 

function registrasi($data)
{
     global $conn;

     $username  = strtolower(stripslashes($data["username"]));
     $password  = mysqli_real_escape_string($conn, $data["password"]);
     $password2 = mysqli_real_escape_string($conn,  $data["password2"]);

     // cek konfirmasi password

     if ($password !== $password2) {
          echo " <script>
          
          alert('password tidak sesuai!');
          </script>";

          return false;
     }

     $result = mysqli_query($conn, "SELECT username FROM users WHERE 
     username = '$username'");

     if (mysqli_fetch_assoc($result)) {
          echo "<script>
          
          alert('Username Sudah Tersedia !');
          </script>";

          return false;
     }



     // encripsi pasword 
     $password = password_hash($password, PASSWORD_DEFAULT);

     // masukan akun ke data base

     mysqli_query($conn, "INSERT INTO users VALUES ('', '$username','$password')");

     return mysqli_affected_rows($conn);
}