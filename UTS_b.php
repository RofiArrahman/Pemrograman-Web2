<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Belanja</title>
    <style>
      
        body {
            font-family: 'Times New Roman', Times, serif;
        }
        .struk {
            border: 2px solid black;
            padding: 10px;
            width: 300px;
            margin: 20px;
        }
    </style>
</head>
<body>

<?php

$pepsodent = 7 * 10000;
$rinso = 5 * 20000;
$downy = 2 * 22000;
$total = $pepsodent + $rinso + $downy;
$diskon20 = "20%";
$diskon30 = "30%";

if ($total >= 300000) {
    $diskon = 0.30; 
    $diskon_amount = $total * $diskon;
    $totaldiskon = $total - $diskon_amount;
} elseif ($total >= 200000) {
    $diskon = 0.20; 
    $diskon_amount = $total * $diskon;
    $totaldiskon = $total - $diskon_amount;
} else {
    $diskon_amount = 0;
}

$struk = [
    "Tanggal Transaksi : " => ["20 November 2023"],
    "Produk : " => [""],
    "Pepsodent(7x10.000) : " => [$pepsodent],
    "Rinso(5x20.000) : " => [$rinso],
    "Downy(2x12.000) : " => [$downy],
    "Total : " => [$total],
    "Diskon : " => [$diskon20,-$diskon_amount], 
    "Total Pembayaran : " => [$totaldiskon]
];

echo "<div class='struk'>";

foreach ($struk as $belanja => $str) {
    echo "<br></br>$belanja";

    if (is_array($str)) {
        foreach ($str as $element) {
            echo "$element";
        }
    }
}

echo "</div>";

?>


</body>
</html>
