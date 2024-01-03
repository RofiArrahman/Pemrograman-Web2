<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5C.php</title>
</head>
<body>
    <?php
   
    if (isset($_GET['nama'])) {
        
        $nama = $_GET['nama'];
        $gambar = $_GET['gambar'];
        $tanggal_lahir = $_GET['tanggal_lahir'];
        $tempat_lahir = $_GET['tempat_lahir'];

        echo '<div class="box">';
        echo '<h2>Detail Pahlawan</h2>';
        echo '<img src="' . $gambar . '" alt="' . $nama . '">';
        echo '<p>Nama: ' . $nama . '</p>';
        echo '<p>Tanggal Lahir: ' . $tanggal_lahir . '</p>';
        echo '<p>Tempat Lahir: ' . $tempat_lahir . '</p>';
        echo '</div>';
    } else {
        
        echo '<p>Data tidak ditemukan</p>';
    }
    ?>

</body>
<style>
        body {
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .box {
            background-color: aliceblue;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        img {
            border-radius: 50%;
            width: 130px;
            height: 120px;
            margin-bottom: 10px;
        }

        h2, p {
            font-family: 'Times New Roman';
            color: black;
        }
    </style>
</html>
