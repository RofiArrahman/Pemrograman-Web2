<!DOCTYPE html>
<html>
<head>
    <title>latihan 3A</title>
</head>
<body>
    <?php
    function ubahStyle($string, $kelas) {
      
        return '<span class="' . $kelas . '">' . $string . '</span>';
    }

    $tulisan = "<i>Hello World! Here I Come! <i>";
    $kelas = "ganti_style";

   
    echo ubahStyle($tulisan, $kelas);
    ?>
</body>
<style>
        .ganti_style {
            color: navy; 
            font-weight: bold;
            font-family: arial;
            font-size: 28px;
        }
    </style>
</html>