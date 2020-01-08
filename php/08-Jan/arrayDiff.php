<?php
$student1 = array(1=>"history",2=>"Maths","Biology");
$student2 = array(1=>"history",3=>"Maths");
$result = array_diff($student1,$student2);
print_r($result);
print_r(array_intersect($student1,$student2));
print_r(array_diff_assoc($student1,$student2) );
?>
