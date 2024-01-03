<?php
$negara =["Indonesia"=>["D.K.I. Jakarta","Nasi Goreng","+62"],
"Singapura"=>["Singapura","Laksa","+65"],
"Malaysia"=>["Kuala Lumpur","Ayam percik","+60"],
"Brunei"=>["Bandar Sri Begawan","Ambuyat","+673"],
"Thailand"=>["Bangkok","Tom yum goong","+66"],
"Laos"=>["Vientiane","Laap","+856"],
"Filipina"=>["Manila","Ayam adobo","+63"],
"Myanmar"=>["Naypyidaw","Mohinga","+95"]];

echo "<table border='1'>";
echo "<tr><th>Negara</th><th>IbuKota</th><th>Makanan Khas</th><th>Kode telepon</th></tr>";

foreach ($negara as $asean => $ket) {
    echo "<tr>";
    echo "<td>$asean</td>";
    foreach ($ket as $detail) {
        echo "<td>$detail</td>";
    }
    echo "</tr>";
}

echo"</table>";
?>