<?php
$insert=array(1,2,3,4,5,6);
$element=10;
array_splice( $insert, 2, 0, $element);
var_dump($insert);
echo "<br>";
print_r($insert);
