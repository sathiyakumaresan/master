<?php
$values=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
echo "Key sort in ascending order:<br>";
ksort($values);
foreach($values as $key=>$value) {
    echo $key." ".$value."<br>";
}

echo "Key sort in descending order:<br>";
krsort($values);
foreach($values as $key=>$value) {
    echo $key." ".$value."<br>";
}

echo "value sort in ascending order:<br>";
asort($values);
foreach($values as $key=>$value) {
    echo $key." ".$value."<br>";
}

echo "value sort in descending order:<br>";
arsort($values);
foreach($values as $key=>$value) {
    echo $key." ".$value."<br>";
}
