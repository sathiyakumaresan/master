<?php
$string="This is php scripting";
echo "Uppercase: ".strtoupper($string)."<br>";
echo "Lowercase: ".strtolower($string)."<br>";
echo "First leter upper: ".ucfirst($string)."<br>";
echo "First word upper: ".ucwords($string)."<br>";

$value='082307';
$value=chunk_split($value,2,':');
echo "split: ".substr($value,0,-1)."<br>";

$sample='sathiya@aspiresys.com';
echo "last 3 characters: ".substr($sample,-3)."<br>";

$sample='the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'that', $sample,1)."<br>";

$value='000547023.24';
echo ltrim($value,'0');


