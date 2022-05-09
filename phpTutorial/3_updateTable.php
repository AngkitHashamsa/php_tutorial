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
$id = 2;
// sql query to be executed
$sql = "UPDATE `names` SET `name` = '$name', `role` = '$role', `DOJ` = '2022-05-31 18:33:44' WHERE `names`.`id` = $id;";
// add a new

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "The record was updated successfully";
} else {
    echo "The record was not updated successfully" . mysqli_error($conn);
}
