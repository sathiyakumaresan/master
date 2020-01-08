<?php
$array=array("c","java","innerArray"=>array("1"=>"element","2"=>"charcters",3=>array(1,2,3)));
var_dump($array[0]);
var_dump($array["innerArray"][0]);
var_dump($array["innerArray"][1]);
var_dump($array["innerArray"]{3}{0});

echo "This is example of $array[0]";
?>
