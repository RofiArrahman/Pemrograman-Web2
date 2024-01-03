<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>latihan 1C</title>
</head>

<body>
    <div class="wrapper">
        <div class="kotakA1"> <?php $a1 ="A" ?>
            <?php echo "$a1 <br>" ?>   
        </div>

        <div class="kotakA2"> <?php $a2 ="A" ?>
            <?php echo "$a2 <br>" ?>
        </div>

        <div class="kotakA3"> <?php $a3 ="A" ?>
            <?php echo "$a3 <br>" ?>
        </div>

        <div class="kotakB1"> <?php $b1 ="B" ?>
            <?php echo "$b1 <br>" ?>
        </div>

        <div class="kotakB2"> <?php $b2 ="B" ?>
            <?php echo "$b2 <br>" ?>
        </div>

        <div class="kotakC"> <?php $c ="C" ?>
            <?php echo "$c <br>" ?>
        </div>
       
    </div>
</body>
</html>

<style>
    body{
        background-color: black;
    }
    .wrapper{
        width: 500px;
        height: 500px;
        border: 5px solid white;
        margin-top: 50px;
        margin-left: 370px;
    }

    .kotakA1{
        width: 100px;
        height: 100px;
        text-align: center;
        border: 4px solid darkblue;
        margin-top: 55px;
        margin-left: 30px;
        color: darkred;
        font-size: 80px;
    }

    .kotakA2{
        width: 100px;
        height: 100px;
        text-align: center;
        border: 4px solid darkblue;
        margin-top: 30px;
        margin-left: 30px;
        color: darkgoldenrod;
        font-size: 80px;
    }

    .kotakA3{
        width: 100px;
        height: 100px;
        text-align: center;
        border: 4px solid darkblue;
        margin-top: 30px;
        margin-left: 30px;
        color: darkgreen;
        font-size: 80px;
    }

    .kotakB1{
        width: 100px;
        height: 100px;
        text-align: center;
        border: 4px solid darkblue;
        margin-top: -245px;
        margin-left: 190px;
        margin-bottom: 40px;
        color: darkslategray;
        font-size: 80px;
    }
    
    .kotakB2{
        width: 100px;
        height: 100px;
        text-align: center;
        border: 4px solid darkblue;
        margin-top: -10px;
        margin-left: 190px;
        color: darksalmon;
        font-size: 80px;
    }

    .kotakC{
        width: 100px;
        height: 100px;
        text-align: center;
        border: 4px solid darkblue;
        margin-top: -108px;
        margin-left: 350px;
        color: darkcyan;
        font-size: 80px;
    }
    
</style>