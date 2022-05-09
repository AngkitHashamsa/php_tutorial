<?php
echo "MySql Connection";
// * 1) MySQLi extension
// ? 2) PDO
// CONNECTING TO THE DATA BASE
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbemployee";
//create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

//die if connection was not succesfuul

if (!$conn) {
    die("Sorry we failed to connect <br>" . mysqli_connect_error());
}

echo "connection was sucessful";

$sql = "CREATE TABLE `employee` ( `id` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(50) NOT NULL ,  `role` VARCHAR(50) NOT NULL ,  `DOJ` DATETIME NOT NULL ,    PRIMARY KEY  (`id`)) ";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The table was created successfully";
} else {
    echo "The table was not created successfully" . mysqli_error($conn);
}
