<?php

    include('koneksi.php');

    // var_dump($conn);
    
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $satuan = $_POST['satuan'];
    $stok = $_POST['stock'];
    $gambar = $_POST['gambar'];
    $tanggal = $_POST['tanggal'];

    $sql = $conn->exec("UPDATE `inventor` SET `kode` = '$kode', `nama` = '$nama', `harga` = '$harga', `kategori` = '$kategori', `satuan` = '$satuan', `stock` = '$stok', `gambar` = '$gambar', `tanggal` = '$tanggal' WHERE `inventor`.`kode` = '$kode';");

    if ($sql == true) {
        echo "<script>alert('Data berhasil di Update')</script>";
        header('location:../index.php');
    }else{
        echo "astagfirullah";
    }
?>