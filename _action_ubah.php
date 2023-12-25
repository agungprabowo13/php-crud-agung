<?php

include("koneksi.php");
$id = $_POST["id"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$role = $_POST["role"];

$query = mysqli_query($koneksi,"UPDATE  tb_mlbb SET nama = '$nama',alamat = '$alamat', role = '$role' WHERE id = '$id'");
if ($query) {
    header('location:index.php');
}else{
    echo("gagal");
}
?>