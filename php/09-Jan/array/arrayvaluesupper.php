<?php
$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$color=array_change_key_case($color,CASE_LOWER);
$color=array_flip($color);
$color=array_change_key_case($color,CASE_UPPER);
$color=array_flip($color);
$color=array_change_key_case($color,CASE_UPPER);
print_r($color);
?>
