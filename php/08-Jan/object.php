<?php 
$colours=(object) array("1"=>'red',2=>'blue',3=>'green');
var_dump(isset($colours->{'1'}));
echo "<br>";
var_dump($colours);
echo "<br>";
var_dump(key($colours));
echo "<br>";
print_r($colours->scalar);
$color=(object) 'red';
echo $color->scalar;

?>
