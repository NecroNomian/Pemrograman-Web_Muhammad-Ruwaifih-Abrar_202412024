<?php
include 'koneksi.php';

$data = mysqli_query($conn,"SELECT * FROM produk");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Produk Toko</title>
</head>
<body>

<h2>Data Produk Toko</h2>

<a href="tambah.php">Tambah Produk Baru</a>

<br><br>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Nama Produk</th>
    <th>Harga</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php while($row=mysqli_fetch_assoc($data)){ ?>

<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['nama_produk']; ?></td>
    <td>Rp <?= number_format($row['harga'],0,',','.'); ?></td>
    <td><?= $row['stok']; ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id']; ?>">Hapus</a>
    </td>
</tr>

<?php } ?>

</table>

</body>
</html>