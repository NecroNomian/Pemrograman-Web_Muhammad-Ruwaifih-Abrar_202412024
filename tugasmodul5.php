<?php
// Variabel
$nama = "";
$email = "";
$pesan = "";
$error = "";
$berhasil = false;

// Cek apakah form dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Membersihkan input
    $nama = htmlspecialchars(trim($_POST["nama"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pesan = htmlspecialchars(trim($_POST["pesan"]));

    // Validasi
    if (empty($nama) || empty($email) || empty($pesan)) {
        $error = "❌ Semua kolom wajib diisi!";
    } else {
        $berhasil = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu Digital STITEK Bontang</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background: #f4f7fb;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
        }

        h1 {
            text-align: center;
            color: white;
            background: #0d6efd;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }

        .form-box {
            background: white;
            padding: 25px;
            box-shadow: 0 0 15px rgba(0, 0, 0, .1);
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 13px;
            border: none;
            background: #0d6efd;
            color: white;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: .3s;
        }

        button:hover {
            background: #084298;
        }

        .error {
            margin-top: 20px;
            padding: 15px;
            background: #f8d7da;
            color: #842029;
            border-radius: 8px;
        }

        .hasil {
            margin-top: 25px;
            background: #d1e7dd;
            padding: 20px;
            border-radius: 8px;
        }

        .hasil h2 {
            color: green;
            margin-bottom: 15px;
        }

        .data {
            background: white;
            padding: 15px;
            border-radius: 8px;
            margin-top: 10px;
            border-left: 5px solid #198754;
        }

        .data p {
            margin: 10px 0;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            color: #777;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>Buku Tamu Digital STITEK Bontang</h1>

        <div class="form-box">

            <form action="" method="POST">

                <label>Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap"
                    value="<?php echo $nama; ?>">

                <label>Alamat Email</label>
                <input type="email" name="email" placeholder="Masukkan Email"
                    value="<?php echo $email; ?>">

                <label>Pesan / Komentar</label>
                <textarea name="pesan" placeholder="Tulis pesan..."><?php echo $pesan; ?></textarea>

                <button type="submit">
                    Kirim Pesan
                </button>

            </form>

            <?php
            if ($error != "") {
                echo "<div class='error'>$error</div>";
            }
            ?>

            <?php
            if ($berhasil) {
            ?>

                <div class="hasil">

                    <h2>✅ Pesan Berhasil Dikirim</h2>

                    <div class="data">

                        <p><strong>Nama Lengkap :</strong> <?php echo $nama; ?></p>

                        <p><strong>Alamat Email :</strong> <?php echo $email; ?></p>

                        <p><strong>Pesan :</strong><br>
                            <?php echo nl2br($pesan); ?>
                        </p>

                        <p><strong>Tanggal :</strong>
                            <?php echo date("d-m-Y H:i:s"); ?>
                        </p>

                    </div>

                </div>

            <?php
            }
            ?>

        </div>

        <footer>

            &copy; <?php echo date("Y"); ?> Buku Tamu Digital STITEK Bontang
        </footer>

    </div>

</body>

</html>