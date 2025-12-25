<?php

$name  = $_POST["name"];
$address   = $_POST["address"];
$email = $_POST["email"];
$memo  = $_POST["memo"];
$c     = " , ";
$str = $name.$c.$address.$c.$email.$c.$memo;     //aaaaa,bbbbb,ccccc

$file = fopen("data.csv","a");
fwrite($file, $str."\n");
fclose($file);

header("Location: index.php");
exit;

?>

