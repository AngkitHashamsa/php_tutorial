<div>
<?php
echo 'scope';
$a = 98;
$b = 6;
echo $a . "\n";
function PrintValue($val)
{
    // $a = 48;
    // echo $a . "\t";
    global $a, $b;
    $a = 1;
    $b = 2;
    echo $val + $a + $b;
}

PrintValue($a);
echo "global $a and $b";
echo var_dump($GLOBALS);
echo "<br>";
echo var_dump($GLOBALS['a']);
echo "<br>";
echo var_dump($GLOBALS["_GET"]);
echo "<br>";

echo var_dump($GLOBALS['b']);
?>
</div>

