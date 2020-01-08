<?php
class College
{
function read()
{
    if(isset($this))
    {
     echo get_class($this);
     }
    else
    {
      echo "This is not defined"; 
    }
}
}
class Student 
{
    public function __construct()
   {
 echo "constructer called";
    }
    static function exam()
    {
         College::read();
    }
}
$col=new College();
$col->read();

College::read();
$stud=new Student();
$stud->exam();
Student::exam();
?>
