<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "logistics";

// koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// mengecek apakah koneksi berhasil 
if (!$conn){
    die("Koneksi Gagal".mysqli_connect_error());
}


?>