<?php

include("koneksi.php");

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $jk = $_POST['jk'];
    $kontak = $_POST['kontak_telepon'];

    $sql = "INSERT INTO tb_penghuni (nama, alamat, usia, jk, kontak_telepon)
    VALUE ('$nama', '$alamat', '$usia', '$jk', '$kontak')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: penghuni.php?status=berhasil');
    } else{
        header('Location: penghuni.php?status=gagal');
    }
} else{
    die("Akses diblokir");
}
?>