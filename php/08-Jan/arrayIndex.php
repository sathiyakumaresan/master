<?php
error_reporting(E_ALL);
$student=array('name'=>'sathiya','degree'=>'B.Tech','gender'=>'female');
print $student[name]."<br>";
print "$student[name]"."<br>";
print "This is degree of the student". ${student[name]}."<br>";
print "This is degree of the student ${student[name]}"."<br>";

print "student name : ".$student['name']."<br>";
define('name','degree');
print "After redefining the name: ".$student[name]."<br>";
?>

