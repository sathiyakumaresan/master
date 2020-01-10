<?php
$book='{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}
}';
$array=json_decode($book,true);
foreach($array as $key=>$value)
{
    echo $key." : " .$value."<br>";
}

