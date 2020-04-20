<?php
    include('lib/koneksi.php');
    $kode = $_GET['id'];
    $hasil = $conn->query("SELECT * FROM `inventor` WHERE `kode`='$kode'" );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    
        form table{
            border:1px solid #000; 
            padding:1em; 
            margin:auto;
        }

        table{
            margin:auto; 
        }


    </style>

</head>
<body>
    <div class="container">
            <!-- Table Master -->
        <?php foreach($hasil as $data) : ?>
        <form action="lib/edit.php" method="post" class="form-tambah">
            <table cellpadding="10" cellspacing="0">
                <tr>
                    <td colspan=2>
                        <h1 style="text-align:center; margin:0; margin-bottom:0.5em">Form Edit Data Barang</h1>
                    </td>
                </tr>
                <tr>
                    <td>Kode Produk :</td>
                    <td><input type="text" name="kode" value="<?= $data['kode'] ?>"></td>
                </tr>
                <tr>
                    <td>Nama Produk :</td>
                    <td><input type="text" name="nama" value="<?= $data['nama'] ?>"></td>
                </tr>
                <tr>
                    <td>Harga Produk : </td>
                    <td><input type="text" name="harga" value="<?= $data['harga'] ?>"></td>
                </tr>

                <tr>
                    <td>Kategori : </td>
                    <td>
                        <select style="width:100%;" name="kategori" id="kategori">
                            <option selected = "selected" value="<?= $data['kategori'] ?>"><?= $data['kategori'] ?></option>
                            <option value="Minuman Dingin">Minuman Dingin</option>
                            <option value="Minuman Hangat">Minuman Hangat</option>
                            <option value="Minuman Biasa">Minuman Biasa</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Satuan : </td>
                    <td>
                        <select style="width:100%;" name="satuan" id="satuan">
                            <option selected ="selected" value="<?= $data['satuan'] ?>"><?= $data['satuan'] ?></option>
                            <option value="Gelas">Gelas</option>
                            <option value="Botol">Botol</option>
                            <option value="pcs">Pcs</option>
                        </select>
                    </td>
                </tr>                    
                <tr>
                    <td>Stok Awal : </td>
                    <td><input type="text" name="stock" value="<?= $data['stock'] ?>"></td>
                </tr>
                <tr>
                    <td> Url Gambar : </td>
                    <td><input  type="text" name="gambar" value="<?= $data['gambar'] ?>"></td>
                </tr>
                <tr>
                    <td>Tanggal Ditambahkan : </td>
                    <td><input style="width:100%;" type="date" name="tanggal" value="<?= $data['tanggal'] ?>"></td>
                </tr>
                <tr>
                    <td><button type="submit">Simpan</button></td>
                </tr>
            </table>
        </form>
        <?php endforeach; ?>
    </div>
</body>
</html>
