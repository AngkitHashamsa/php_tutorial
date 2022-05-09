<?php
$file = fopen("myFile.text", "r");
// it reads line by line;
// $content = fgets($file);

// ! reading the file line by line
// while ($a = fgets($file)) {
//     echo $a;
// }
// echo "<br>End of the file has n=been reach";
// fclose($file);
// echo var_dump($content);

// ! reading the file character by character
// $count = 0;
// while ($a = fgetc($file)) {
//     echo $a;
//     $count++;
// }
// ;
// echo $count;
// echo "<br>\"End of the file has been reach\"";
// fclose($file);

// ! breaks the program when $a == .
$count = 0;
while ($a = fgetc($file)) {
    if ($a == ".") {
        break;
    }
    echo $a;
    $count++;
}
;

echo "<br>";
echo $count;
echo "<br>\"End of the file has been reach\"";
fclose($file);
