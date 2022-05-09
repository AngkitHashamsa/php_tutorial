<?php
$filePointer = fopen('./myFile.text', "r");
// echo var_dump($filePointer);
if (!$filePointer) {
    die("unable to open");
}
echo "<br>";
$content = fread($filePointer, filesize('./myFile.text'));
echo $content;
fclose($filePointer);
