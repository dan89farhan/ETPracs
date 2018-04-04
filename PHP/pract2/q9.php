<?php
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);
 echo "Sorting array by value and print";
echo "<br>";
asort($age);
print_r($age);
echo "<br>";
echo "Sorting array by key and print";
echo "<br>";
ksort($age);
print_r($age);
?>