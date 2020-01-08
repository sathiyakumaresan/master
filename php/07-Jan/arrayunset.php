<?php
$array= array(3=>"sathiya",1=>"12",2=>"1998");
print_r($array);
sort($array);
print_r($array);
print_r(count($array));
foreach ($array as $key=>$value )
{
    unset($array[$key]);
}
print("<br>array after unset : ");
print_r($array);
$array[]="sathiya";//will be reinitallized from the end value of the array,it should be reindexed
print_r($array)
?>
