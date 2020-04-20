<?php
    include('koneksi.php');

    $kode = $_GET['kode'];
    $sql = $conn->exec("DELETE FROM `inventor` WHERE `inventor`.`kode` = '$kode'");


    if ($sql==true) {        
        echo "<script>alert('Data Berhasil Di Hapus')</script>";
        header("location:../index.php?info=delete");
    }else{
        echo "alert=('Data Gagal Di Hapus')";
    }
?>