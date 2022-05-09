<?php
echo "MySql Connection";
// * 1) MySQLi extension
// ? 2) PDO
// CONNECTING TO THE DATA BASE
$servername = "localhost";
$username = "root";
$password = "";

//create a connection
$conn = mysqli_connect($servername, $username, $password);

//die if connection was not succesfuul

if (!$conn) {
    die("Sorry we failed to connect <br>" . mysqli_connect_error());
}

$sql = "CREATE DATABASE dbStudents";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "db was created";
} else {
    echo mysqli_error($conn);
}
