<?php
$negara =["Indonesia","Singapura","Malaysia","Brunei","Thailand"];

echo"<b>Daftar Negara ASEAN Awal </b>:";
echo "<br>";
   foreach ($negara as $asean) {
    echo "<li>$asean";
   }
echo"<br><br>";
$baru = array_push($negara, "Laos","Filipina","Myanmar");
echo "<b>Daftar Negara ASEAN Baru :</b>";
foreach ($negara as $asean) {
    echo "<li>$asean";
   }
?>