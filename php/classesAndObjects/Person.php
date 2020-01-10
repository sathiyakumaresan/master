
<?php

class Person
{
  protected $name;
  protected $degree;
  
  public function  __construct($name,$degree)
  {
   $this->name=$name;
   $this->degree=$degree;
  }
  
}
class Personalinfo extends Person{
 public $age;
 public $phone;
 public $email;
  
public function  __construct($name,$degree,$age,$phone,$email)
  {
   parent::__construct($name,$degree);
   $this->age=$age;
   $this->phone=$phone; 
   $this->email=$email;

  }
  public function write()
  {
    echo $this->name."<br>";
    echo $this->degree."<br>";
    echo $this->age."<br>";
    echo $this->phone."<br>";
    echo $this->email."<br>";
   }

}
$object = new Personalinfo("sathiya","B.Tech",12,1234567,"sathiya@gmail.com");
//$object->display();
$object->write();
var_dump($object);
unset($object);
$object->write();
?>

