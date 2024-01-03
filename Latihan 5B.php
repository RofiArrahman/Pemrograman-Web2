<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5B.php</title>
</head>
<body>
    <h2>Daftar Pahlawan Nasional</h2>
    <div class="BOX">
        <?php
        $pahlawan = [
            [
                'nama' => 'Sultan Thaha Syaifuddin',
                'gambar' => 'Sultan_Thaha_Syaifuddin.jpg',
                'tanggal_lahir' => '3 Oktober 1920',
                'tempat_lahir' => 'Jambi'
            ],
            [
                'nama' => 'Sultan Hasanuddin',
                'gambar' => 'hasannudin_1.webp',
                'tanggal_lahir' => '12 Januari 1631',
                'tempat_lahir' => 'Makassar'
            ],
            [
                'nama' => 'K.H Agus Salim',
                'gambar' => 'Agus_Salim.jpg',
                'tanggal_lahir' => '8 Oktober 1884',
                'tempat_lahir' => 'Koto Gadang'
            ]
        ];

        foreach ($pahlawan as $nasional) {
            echo '<div class="kotak">';
            echo '<a href="Latihan 5C.php?nama=' . urlencode($nasional['nama']) . '&gambar=' . urlencode($nasional['gambar']) . '&tanggal_lahir=' . urlencode($nasional['tanggal_lahir']) . '&tempat_lahir=' . urlencode($nasional['tempat_lahir']) . '">';
            echo '<img src="' . $nasional['gambar'] . '" alt="">';
            echo $nasional['nama'];
            echo '</a>';
            echo '<p>' . $nasional['tanggal_lahir'] . '</p>';
            echo '<p>' . $nasional['tempat_lahir'] . '</p>';
            echo '</div>';
        }
        ?>
    </div>

    <style>
        body {
            background-color: blanchedalmond;
            overflow: hidden;
        }

        .BOX {
            background-color: gray;
            width: 500px;
            height: 450px;
            position: absolute;
            left: 390px;
        }

        .kotak {
            background-color: aliceblue;
            width: 460px;
            height: 130px;
            position: relative;
            top: 15px;
            left: 20px;
            margin-bottom: 15px;
        }

        h2 {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
        }

        img {
            border-radius: 50%;
            width: 130px;
            height: 120px;
            position: relative;
            top :95px;
            right: 10px;
        }

        a {
            font-family: 'Times New Roman';
            text-decoration: none;
            font-size: 20px;
            color: black;
            position: relative;
            left: 30px;
            bottom: 90px;
            display: inline-block; 
        }

        p {
            font-family: 'Times New Roman';
            text-decoration: none;
            font-size: 20px;
            color: black;
            position: relative;
            left: 162px;
            bottom: 90px;
        }
    </style>
</body>
</html>
