<?php
// start the session ad=nd get the data
session_start();

if (isset($_SESSION['username'])) {
    echo "Welcome" . $_SESSION['username'];
    echo "<br>";
    echo "Your fav pastime is " . $_SESSION['favCat'];
}

echo "please login";
