<?php
// connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$text = "";
$database = "users";
$isInsert = false;
$isError = false;
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect <br>" . mysqli_connect_error());
}
echo 'connected succesfully';
