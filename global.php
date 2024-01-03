<?php
$nama="Ahmad Rofi Arrahman";  //variabel global

function haloDunia(){
    $nama ="Rofi Arrahman";  #variabel local
    echo $nama . '<br>';   #Rofi Arrahman
}

haloDunia();
echo $nama;   #Ahmad Rofi Arrahman
?>