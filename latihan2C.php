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
        $R = ($i % 2 == 0) ? 'Ganjil' : 'Genap';
        for( $j=1; $j<$i; $j++){
            echo " <div class='clear $R'>".$j."</div>";
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
        border: 4px black;
        margin-top: 40px;
        margin-left: 30px;
        
        font-size: 35px;
        display: inline-block;
    }

    .Ganjil{
        background-color: #003;
        color: #fff;
    }

    .Genap{
        background-color: #999;
    }

</style>
</html>