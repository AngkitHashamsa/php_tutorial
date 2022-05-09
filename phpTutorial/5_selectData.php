<?php
echo "MySql Connection";
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Sorry we failed to connect <br>" . mysqli_connect_error());
} else {
    echo "connection was sucessful <br>";
}
echo "<br>";
// variables to be enter into the table
$name = "Car";
$role = "drive";
// sql query to be executed
$sql = "SELECT * FROM users";

// add a new

$result = mysqli_query($conn, $sql);

// Print number of row
$num = mysqli_num_rows($result);
echo $num;
echo "<br>";
echo "<br>";

echo "record found in database";
echo "<br>";

if ($num > 0) {
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    while ($row = mysqli_fetch_assoc($result)) {
        // echo var_dump($row);
        echo $row['id'] . ' ' . $row['email'] . ' ' . $row['name'] . '<br>';
    }
} else {
    return;
}
