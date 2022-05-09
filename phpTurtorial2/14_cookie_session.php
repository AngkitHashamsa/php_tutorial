<?php
echo "session php";
// what is a session?
// used to manage information across different pages
session_start();

$_SESSION['username'] = "Angkit";
$_SESSION['favCat'] = "Anime";
echo "We have save your session";
