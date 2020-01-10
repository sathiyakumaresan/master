<?php
$array=[2,4,7,3];
$newarray=$array;
$newarray[1]=3;
print_r($array); echo "<br>";
print_r($newarray);
echo "<br> with referance <br>";
$newarray=&$array;
$newarray[1]=3;
print_r($array); echo "<br>";
print_r($newarray);
?>
