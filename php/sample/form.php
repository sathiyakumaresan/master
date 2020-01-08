<html>
<head>
</head>
<body>
<form method="GET" action="form.php">
<input type="text" name="name">
<button>Submit</button>
</form>
</body>
<?php

$name=$get(name);
echo $name;
if($name==="")
{
echo "Please enter the name";
}
?>
</html>
