<?php
    include("koneksi.php");
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $role = $_POST["role"];

    $query = mysqli_query($koneksi,"INSERT INTO tb_mlbb SET nama = '$nama',alamat = '$alamat',role='$role'");
    if($query){
        header('location:index.php');
    }else{
        echo "error";
    }
?>