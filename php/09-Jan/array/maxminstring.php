<?php
$string=array("abcd","abc","de","hjjjj","g","wer");
$string=array_map('strlen',$string);
var_dump($string);
echo "<br>Longest string length: ".max($string)."<br>";
echo "Shortest String length: ".min($string)."<br>";

