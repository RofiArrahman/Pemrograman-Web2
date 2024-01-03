<?php
$mahasiswa = [
    "001"=>"Ahmad",
    "002"=>"Budi",
    "003"=>"Chiki",
    "004"=>"Dhini",
    "005"=>"Erwin"];
    //untuk memasukan value,kita harus membuat key yang merepresentasikan valuenya,
    //tanda "=>" dapat di artikan sebagai merujuk "key" => "value"
?>
  <?php  foreach ($mahasiswa as $nrp => $nama) : ?> 
    <li><?php echo "$nrp : $nama"?><li>
    <?php endforeach ?>
