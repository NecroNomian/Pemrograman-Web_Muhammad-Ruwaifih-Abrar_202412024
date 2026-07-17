<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){

    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];

    mysqli_query($conn,"INSERT INTO produk(nama_produk,harga,stok)
    VALUES('$nama','$harga','$stok')");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Produk</title>
</head>
<body>

<h2>Tambah Produk</h2>

<form method="POST">

Nama Produk <br>
<input type="text" name="nama"><br><br>

Harga <br>
<input type="number" name="harga"><br><br>

Stok <br>
<input type="number" name="stok"><br><br>

<input type="submit" name="simpan" value="Simpan">

</form>

</body>
</html>