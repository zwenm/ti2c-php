<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "penghuni_kos";

$db = mysqli_connect($server, $user, $password, $nama_database);
echo "<script>alert('Berhasil Terhubung dengan Database');</script>";
if( !$db ) {
    die("Gagal terhubung dengan database : " . mysqli_connect_error());
}
?>