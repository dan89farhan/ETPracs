<?php
$my_str = 'Welcome to PHP';
echo "String :$my_str </br>";
echo "String Length : </br>";
echo strlen($my_str);
echo "<br>";
echo "Word Count : </br>";
echo str_word_count($my_str);
echo "<br>";
echo "Replacing PHP to VJTI : </br>";
echo str_replace("PHP", "VJTI", $my_str);
echo "<br>";
echo "Reversing String : </br>";
echo strrev($my_str);
?>