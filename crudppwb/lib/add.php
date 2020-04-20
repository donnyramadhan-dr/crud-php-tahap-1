<?php
    include('koneksi.php');

    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $satuan = $_POST['satuan'];
    $stok = $_POST['stock'];
    $gambar = $_POST['gambar'];
    $tanggal = $_POST['tanggal'];

    $sql = $conn->exec("INSERT INTO `inventor` (`kode`, `nama`, `harga`, `kategori`, `satuan`, `stock`, `gambar`, `tanggal`) VALUES ('$kode', '$nama', '$harga', '$kategori', '$satuan', '$stok', '$gambar', '$tanggal');");

    if ($sql==true) {
        echo "<script>alert('Data Berhasil Disimpan')</script>";
        header("location:../index.php?info=tambah");
    }else{
        echo "Data Gagal Di Simpan";
    }
?>