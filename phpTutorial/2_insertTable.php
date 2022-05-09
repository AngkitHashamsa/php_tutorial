<?php
echo "MySql Connection";
$servername = "localhost";
$username = "root";
$password = "";
$database = "myName";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect <br>" . mysqli_connect_error());
} else {
    echo "connection was sucessful";
}
// variables to be enter into the table
$name = "Car";
$role = "drive";
// sql query to be executed
$sql = "INSERT INTO `names` ( `name`, `role`, `DOJ`) VALUES ('$name', '$role', '2022-05-08 18:33:44.000000');";
// add a new

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The record was created successfully";
} else {
    echo "The record was not created successfully" . mysqli_error($conn);
}
