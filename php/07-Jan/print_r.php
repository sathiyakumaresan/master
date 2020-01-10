<?php
$array=["cat","rat"];
var_dump($array);
echo "<br> print r elements  ";
print_r($array);
echo "<br>";
$element=1;
$array[$element]="bat";
echo "key value should not be given without quotes"."<br>";
echo $array[$element];
var_dump($array);
?>
