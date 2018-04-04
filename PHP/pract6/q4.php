<?php
$file = "note.txt";
 if(file_exists($file)){
  if(rename($file, "newfile.txt")){
        echo "File renamed successfully.";
    } else{
        echo "ERROR: File cannot be renamed.";
  }
} else{
    echo "ERROR: File does not exist.";
}
?>