<?php
    $myFile = "results.json";
    var_dump($_POST['data']);
    echo "value is";
    $fh = fopen($myFile, 'w') or die("can't open file");
    fwrite($fh,var_export($_POST['data'], true));
    fclose($fh);
?>