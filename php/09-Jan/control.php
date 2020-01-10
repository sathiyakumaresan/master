<?php
echo "values from 1-10";
for ($value=1; $value<11; $value++) {
if ($value==1){
   echo $value;
}else {
   echo "-${value}";
}
}


for ($value=0; $value<=20; $value++) {
    $total+=$value;
}
echo "<br>Total: ".$total."<br>";


for ($i=0; $i<=5; $i++) {
    for($j=0; $j<$i;$j++) {
         echo '* ';
    }
    echo "<br>";   
}
for ($i=5; $i>=1; $i--) {
    for($j=1; $j<=$i;$j++) {
         echo '* ';
    }
    echo "<br>";   
}
