<?php
$message = "";
$types = "";
function message($text, $type)
{
    global $message, $types;
    $message = $text;
    $types = $type;
}
