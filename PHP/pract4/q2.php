<?php
function factorial($n) {
	$fact=1;
	for($i=1;$i<=$n;$i++)
	{
	$fact*=$i;
	}
    echo "Factorial of $n is $fact!";
}
factorial(3); 
?>