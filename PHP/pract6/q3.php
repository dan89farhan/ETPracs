<?php
$file = "note.txt";
    $data = "We are doing php practicals";
    $handle = fopen($file, "w") or die("ERROR: Cannot open the file.");
    fwrite($handle, $data) or die ("ERROR: Cannot write the file.");
    fclose($handle);
    echo "Data written to the file successfully.";
?>