<?php
$array=array(2=>"1",3=>"2",4=>"3");

var_dump($array); echo "<br>";
$array[]="sathiya";
$array["x"]="newelement";

var_dump($array);echo "<br>";
$array[]="nextelementtokeyx";

var_dump($array);echo "<br>";
unset($array[2]);
echo "Array after deleting the element 1"."<br>";
var_dump($array);
unset($array);
echo "<br>";
echo "After Deleting complete array"."<br>";
unset($array);
var_dump($array);
?>

