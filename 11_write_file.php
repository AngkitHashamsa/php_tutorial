<?php
// ! w overrides
// $file = fopen("myFile1.text", "w");
// fwrite($file, "My name is angkit and my age is 16\t");
// fwrite($file, "\n 2nd para");
// fclose($file);

// whereas a append
$file = fopen("myFile1.text", "a");
fwrite($file, "My name is angkit and my age is 16 \n");
fwrite($file, "\n 2nd para");
fclose($file);
