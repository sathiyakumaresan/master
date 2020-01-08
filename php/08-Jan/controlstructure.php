<?php
$maxScore=15;
$minScore=20;
if($maxScore>$minScore){
print_r("Maxscore is greater than minscore ");
}
else{
print_r("Maxscore is lesser than minscore");
$temp=$minScore;
$minScore=$maxScore;
$maxScore=$temp;
echo "Now minscore and maxscore are: ";
echo "MinScore : ",$minScore," MaxScore : ",$maxScore;

}


?>
