<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($koneksi,"DELETE FROM tb_mlbb WHERE id = '$id'");

if($query){
    header('location:index.php');
}else{
    echo("Penghapusan gagal");
}

?>