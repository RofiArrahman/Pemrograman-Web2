<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN 2B</title>
</head>
<body>
<div class="wrapper">
       <?php
       for( $i=1; $i<=6; $i++){
        for( $j=1; $j<$i; $j++){
            echo " <div class='clear'>$j</div>";
        }
            echo "<br>";
    }
       ?>
    </div>
</body>
<style>
       .wrapper{
        width: 500px;
        height: 500px;
        border: 5px solid black;
        margin-top: 50px;
        margin-left: 370px;
    }

    .clear{
        width: 40px;
        height: 40px;
        text-align: center;
        border: 4px solid darkblue;
        margin-top: 40px;
        margin-left: 30px;
        color: red;
        font-size: 35px;
        display: inline-block;
    }

</style>
</html>