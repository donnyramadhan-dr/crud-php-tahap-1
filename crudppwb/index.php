<?php 
        include('lib/koneksi.php'); 
        if (isset($_GET['info'])) {            
            $info = $_GET['info'];
            if ($info=='delete') {
                echo "<script>alert('Data berhasil di Delete')</script>";
            }
        };

        if (isset($_GET['info'])) {            
            $info = $_GET['info'];
            if ($info=='tambah') {
                echo "<script>alert('Data berhasil di Tambah')</script>";
            }
        };
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Crud PHP</title>

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
    <form action="lib/add.php" method="post" class="form-tambah">
                <table cellpadding="10" cellspacing="0">
                    <tr>
                        <td colspan=2>
                            <h1 style="text-align:center; margin:0; margin-bottom:0.5em">Form Input Data Barang</h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Kode Produk :</td>
                        <td><input type="text" name="kode"></td>
                    </tr>
                    <tr>
                        <td>Nama Produk :</td>
                        <td><input type="text" name="nama"></td>
                    </tr>
                    <tr>
                        <td>Harga Produk : </td>
                        <td><input type="text" name="harga"></td>
                    </tr>

                    <tr>
                        <td>Kategori : </td>
                        <td>
                            <select style="width:100%;" name="kategori" id="kategori">
                                <option value="">pilih kategori</option>
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
                                <option value="">pilih satuan</option>
                                <option value="Gelas">Gelas</option>
                                <option value="Botol">Botol</option>
                                <option value="pcs">Pcs</option>
                            </select>
                        </td>
                    </tr>                    
                    <tr>
                        <td>Stok Awal : </td>
                        <td><input type="text" name="stock"></td>
                    </tr>
                    <tr>
                        <td> Url Gambar : </td>
                        <td><input  type="text" name="gambar"></td>
                    </tr>
                    <tr>
                        <td>Tanggal Ditambahkan : </td>
                        <td><input style="width:100%;" type="date" name="tanggal"></td>
                    </tr>
                    <tr>
                        <td><button type="submit">Simpan</button></td>
                    </tr>
                </table>
            </form>
            <br>

                    <!-- Tampil Data -->
                    <?php $i = 1; $sql = $conn->query('SELECT * FROM `inventor`'); ?>
            <table border=1 cellpadding="10" cellspacing="0" class="tampil">
            <tr>
                <td>No</td>
                <td>Kode Produk</td>
                <td>Nama Produk</td>
                <td>Harga Produk</td>
                <td>Kategori Produk</td>
                <td>Satuan Produk</td>
                <td>Stok Produk</td>
                <td>Gambar Produk</td>
                <td>Tanggal Ditambahkan</td>
                <td>Modify</td>
            </tr>
            <?php foreach($sql as $data):?>
            <tr>
                <td><?= $i++ ?></td>
                <td><?= $data['kode'];          ?></td>
                <td><?= $data['nama'];          ?></td>
                <td><?= $data['harga'];         ?></td>
                <td><?= $data['kategori'];      ?></td>
                <td><?= $data['satuan'];        ?></td>
                <?php $stok = $data['stock']; echo($data['stock']<5) ? "<td style='background:red; color:#fff'>$stok</td>" : "<td>$stok</td>"; ?>
                <td><img src="<?= $data['gambar'];?>" width="100px" height="100px"></td>
                <td><?= $data['tanggal']?></td>
                <td><a href="form_edit.php?id=<?=$data['kode'];?>">Edit</a>| <a href="lib/delete.php?kode=<?= $data['kode'];?>" onclick="return confirm('Apakah Anda  Ingin Menghapusnya?')">Delete</a></td>
            </tr>
            <?php endforeach; ?>
            </table>            
    </div>



    

</body>
</html>