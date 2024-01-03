<?php
$negara =["Indonesia"=> "D.K.I. Jakarta",
"Singapura"=>"Singapura",
"Malaysia"=>"Kuala Lumpur",
"Brunei"=>"Bandar Sri Begawan",
"Thailand"=>"Bangkok",
"Laos"=>"Vientiane",
"Filipina"=>"Manila",
"Myanmar"=>"Naypyidaw"];
?>

<?php
echo"<b>Daftar Negara ASEAN Dan IbuKota</b>";
echo"<br></br>";
foreach ($negara as $asean => $ibukota) : ?> 
    <li><?php echo "$asean : $ibukota"?></li>
    <?php endforeach ?>
