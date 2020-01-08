<?php
$value="Hi this is defrencing an array.";
echo explode(" ",$value)[1]."<br>";
$value=array("count","funtion","reverse");
echo $value[1]."<br>";
function derefrencing()
{
  return array(1,2,3);
}
echo derefrencing()[9]."<br>";//returns nothing since no element 
echo derefrencing()[0]."<br>";

?>
