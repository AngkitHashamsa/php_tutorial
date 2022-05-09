<?php
/**
 * Check if chart type supports column stacking
 *
 * @param {string} type Chart type
 * @returns {void} Whether chart type supports series stacking
 */

$message = "";
$types = "";
function message($text = '', $type = 'success')
{
    global $message, $types;
    $message = $text;
    $types = $type;
}
