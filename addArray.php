<?php
$hari = ["Senin","Selasa"];
print_r($hari);
echo "<br>";
$hari[] ="Rabu"; //menambah elemen pada urutan terakhir array
print_r($hari);
echo "<br>";
$hari[3] = "Kamis"; //menambah elemen pada index yang kita tentukan.
                    //jika index sdh terisi,maka elemen lama akan di ganti dengan elemen baru.
print_r($hari);
?>