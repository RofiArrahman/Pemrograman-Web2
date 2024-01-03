<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 5A</title>
</head>
<body>
    <form action="Latihan 5D.php" method="post">
        <label for="angka">Masukan Angka : </label>
        <input type="text" name="angka" id="angka">
        <button type="sumbit">Tampilkan!</button>
    </form>

<?php
if (isset($_POST["angka"])){
    $angkadiURL = intval($_POST["angka"]);

        for ( $i = 10; $i>= $angkadiURL; --$i){
             for ( $j =1; $j<=$i; $j++){
             echo $j;
         }
         echo "<br>";
         }
    }
?>

</body>
</html>
