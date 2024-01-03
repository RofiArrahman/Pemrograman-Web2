<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
</head>
<body>
    <p>Nama : Ahmad Rofi Arrahman</p>
    <p>Nim : 701220208</p>
    <p>Matkul : Pemrograman web 2</p>
    
    <?Php
        $hasil3digitnim = 208/100*5; 
        echo "<P>Hasil 3digit terakhir nim = $hasil3digitnim</p>";

        $pahlawan =["Ir.-Soekarno.jpg"
        =>["Ir.Soekarno","Surabaya,6 Juni 1901","Dr. Ir. H. Soekarno adalah Presiden pertama Republik Indonesia yang
         menjabat pada kurun waktu 1945–1967. Ia adalah seorang tokoh perjuangan yang berperan penting dalam 
         memerdekakan bangsa Indonesia dari kolonialisme Belanda.","1970"],
        
        "hatta.jpeg"
        =>["Mohammad Hatta","Bukittinggi,12 Agustus 1902","Dr. Drs. H. Mohammad Hatta adalah seorang tokoh penting
         dalam perjuangan kemerdekaan Indonesia, negarawan, dan ekonom Indonesia yang menjabat sebagai Wakil 
         Presiden Indonesia pertama.","1980"],
        
        "Sultan_Thaha_Syaifuddin.jpg"
        =>["Sultan Thaha Saifuddin","Jambi,3 Oktober 1920","Sultan Thaha Syaifuddin (Tanah Pilih, Kesultanan Jambi,
         1816 - Betung Bedarah, Tebo, 26 April 1904) adalah seorang sultan terakhir dari Kesultanan Jambi pada 1855,
         dan Pahlawan Nasional Indonesia.Ia dilahirkan di Keraton Tanah Pilih Jambi pada pertengahan tahun 1816.
         Ketika kecil ia biasa ⁸dipanggil Raden Thaha Jayadiningrat dan bersikap sebagai seorang bangsawan yang
          rendah hati dan suka bergaul dengan rakyat biasa.","1904"],
        
        "hasannudin_1.webp"
        =>["Sultan Hasanuddin","Makassar,12 Januari 1631","Sultan Hasanuddin (12 Januari 1631 – 12 Juni 1670) adalah
         Sultan Gowa ke-16 dan pahlawan nasional Indonesia yang terlahir dengan nama Muhammad Bakir I Mallombasi
          Daeng Mattawang Karaeng Bonto Mangape. Setelah menaiki takhta, ia digelar Sultan Hasanuddin, 
          setelah meninggal ia digelar Tumenanga Ri Balla Pangkana. Karena keberaniannya, ia dijuluki De
          Haantjes van Het Osten oleh Belanda yang artinya Ayam Jantan dari Timur. Ia dimakamkan di Katangka,
          Kabupaten Gowa.","1970"],
        
        "Agus_Salim.jpg"
        =>["H.Agus Salim","Koto Gadang,8 Oktober 1884","H. Agus Salim (lahir dengan nama Masjhoedoelhaq berarti 
         pembela kebenaran ( 8 Oktober 1884 – 4 November 1954) adalah seorang pejuang kemerdekaan Indonesia.
         Ia ditetapkan sebagai salah satu pahlawan nasional Indonesia pada tanggal 27 Desember 1961 melalui 
         Keputusan Presiden Indonesia Nomor 657 tahun 1961.Pekerjaan yang ditekuninya adalah sebagai orator dan 
         penulis. Agus Salim menguasai 4 bahasa asing di Eropa (bahasa Belanda, bahasa Inggris, bahasa Jerman dan 
         bahasa Prancis), 2 bahasa asing di Timur Tengah (bahasa Arab dan bahasa Turki) serta bahasa Jepang.","1954"],
        
        "diponegoro.jpeg"
        =>["Pangeran Diponegoro","Yogyakarta,11 November 1785","Bendara Raden Mas Mustahar, nama yang berkaitan 
        dengan 'fajar' dalam istilah Jawa, sehingga berarti 'Sang Bangsawan yang lahir pada Fajarnya' lahir di 
        Kaputren, Keraton Yogyakarta, pada pukul 3.30-4.00, 11 November 1785, tepat menjelang fajar, saat sahur 
        pada 8 Muharam 1200 H.","1855"],
        
        "soedirman.jpg"
        =>["Jendral Soedirman","Purbalingga,24 Januari 1916","Jenderal Besar TNI Raden Soedirman adalah seorang 
        perwira tinggi Indonesia pada masa Revolusi Nasional Indonesia. Sebagai Panglima Besar Tentara Nasional 
        Indonesia pertama, ia adalah sosok yang dihormati di Indonesia.","1950"],
        
        "sisinga.jpeg"
        =>["Sisingamangaraja XII","Bakkara,18 Februari 1845","Sisingamangaraja XII dengan nama lengkap Patuan Bosar 
        Sinambela ginoar Ompu Pulo Batu (18 Februari 1845 – 17 Juni 1907) adalah seorang raja di Negeri Toba dan 
        pejuang yang berperang melawan Belanda. ia dimakamkan di Tarutung, Tapanuli Utara, lalu dipindahkan ke 
        Soposurung, Balige, Toba pada tahun 1953.","1907"],
        
        "Bonjol.jpg"
        =>["Tuanku Imam Bonjol","Bonjol,1 Januari 1772","Tuanku Imam Bonjol (lahir di Bonjol, Luhak Agam, 
        Pagaruyung, 1772 – wafat dalam pengasingan dan dimakamkan di Lotta, Pineleng, Minahasa, 6 November 1864) 
        adalah salah seorang ulama, pemimpin dan pejuang yang berperang melawan Belanda dalam peperangan yang 
        dikenal dengan nama Perang Padri pada tahun 1803–1838.","1864"],
        
        "patimura.jpeg"
        =>["Thomas Matulessy","Maluku,8 Juni 1783","Tuanku Imam Bonjol (lahir di Bonjol, Luhak Agam, Pagaruyung, 
        1772 – wafat dalam pengasingan dan dimakamkan di Lotta, Pineleng, Minahasa, 6 November 1864) adalah salah 
        seorang ulama, pemimpin dan pejuang yang berperang melawan Belanda dalam peperangan yang dikenal dengan 
        nama Perang Padri pada tahun 1803–1838.","1817"]];
    
        echo "<table border='1'>";
        echo "<tr><th>Foto</th><th>Nama Pahlawan Nasional</th><th>Tempat Tanggal Lahir</th><th>Keterangan</th><th>Wafat</th></tr>";

        foreach ($pahlawan as $nasional => $Indonesia){
            echo "<tr>";
          
            echo "<td><img src='$nasional' alt=''></td>";
            foreach ($Indonesia as $rofi){
                echo "<td> $rofi </td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<style>
            img{
                width : 120px;
                heigth : 120px
            }
            th{
                text-align : center;
                font-size : 20px;
            }
            td{
                text-align : center;
                padding-left : 20px;
                padding-right : 20px;
            }
        
                
        </style>"
    ?>
</body>
</html>