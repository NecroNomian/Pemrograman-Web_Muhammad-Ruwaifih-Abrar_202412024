<?php
include 'koneksi.php';

$id=$_GET['id'];

$data=mysqli_query($conn,"SELECT * FROM produk WHERE id='$id'");
$d=mysqli_fetch_assoc($data);

if(isset($_POST['update'])){

    $nama=$_POST['nama'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];

    mysqli_query($conn,"UPDATE produk SET
    nama_produk='$nama',
    harga='$harga',
    stok='$stok'
    WHERE id='$id'");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Produk</title>
</head>
<body>

<h2>Edit Produk</h2>

<form method="POST">

Nama Produk <br>
<input type="text" name="nama" value="<?= $d['nama_produk']; ?>"><br><br>

Harga <br>
<input type="number" name="harga" value="<?= $d['harga']; ?>"><br><br>

Stok <br>
<input type="number" name="stok" value="<?= $d['stok']; ?>"><br><br>

<input type="submit" name="update" value="Update">

</form>

</body>
</html>