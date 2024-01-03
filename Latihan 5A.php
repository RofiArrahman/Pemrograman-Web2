<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5A</title>
</head>
<body>

<?php
if (isset($_GET["angka"])){
    $angkadiURL = intval($_GET["angka"]);

        for ( $i = 10; $i>= $angkadiURL; --$i){
             for ( $j =1; $j<=$i; $j++){
             echo $j;
         }
         echo "<br>";
         }
    }else{
        echo "Masukan Angka di URL";
    }
?>

</body>
</html>
