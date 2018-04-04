<?php
$i = 0;
for ($i = 0;$i <= 5;$i++)
{
    if ($i==2)
    {
       continue;
    }
    echo $i;
    echo "<br />";}
echo "End of for loop" 
?>