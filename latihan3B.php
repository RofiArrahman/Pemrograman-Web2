<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3B</title>
</head>
<body>
<?php
$jawabanIsset ="Isset adalah =Untuk menentukan apakah suatu variabel dideklarasikan dan berbeda dari null.<br><br>";
$jawabanEmpty ="Empty adalah =Digunakan untuk menentukan apakah variabel ada dan nilai variabel tidak bernilai false.";

function soal($jawabanIsset,$jawabanEmpty){
    $style = "aturstyle";
    return "<span class='$style'>$jawabanIsset$jawabanEmpty</span>";
}

echo soal($jawabanIsset,$jawabanEmpty);

?>
</body>
<style>
    .aturstyle{
        width: 100px;
        height: 100px;
        border: 2px solid black;
    }
</style>
</html>

