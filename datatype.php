<html>
<?php

//gettype() function

$max=true;
$value=10;
echo gettype($value);
echo "<br>";
echo gettype($max);
echo "<br>";

//is_type() function
if(is_bool($max))
{
echo("Yes!! Boolean.<br>");

}
else
{
echo("No!! Boolean.<br>");

}

for($i=0;$i<=10;$i++)
{
  echo($i."<br>");
}
echo "logical operator";
//logical operators
$first=false;
$second=true;

echo $value=$first OR $second; // returns 1
echo $value=$first || $second; // returns 1

echo 'Arnold once said: "I\'ll be back"';  // to escape single quote






?>
</html>
