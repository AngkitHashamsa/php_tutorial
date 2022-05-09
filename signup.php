<?php
require './_dbConnect.php';
require './Alert.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPass = $_POST['confirmPass'];
    $existSql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $existResult = mysqli_query($con, $existSql);
    $existRows = mysqli_num_rows($existResult);
    if ($existRows > 0) {
        message("user with " . $username . " exist", "danger");
    } else if ($password == $confirmPass) {
        $sql = "INSERT INTO `users` (`username`, `password`) VALUES ( '$username', '$password');";
        $result = mysqli_query($con, $sql);
        if ($result) {
            message("Sucessfully created with user name" . $username, "success");
        }

    } else if ($password != $confirmPass) {
        message("please provide correct password", "danger");
    }

}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Sign up</title>
  </head>
  <body>
<!-- Nav -->
<?php
require './components/_nav.php';
?>
<!-- Navbar end -->

<div class="container">
  <?php
if ($message) {
    global $message, $types;
    echo '<div class="alert col-lg-7 mx-auto mt-3 alert-' . $types . ' alert-dismissible fade show" role="alert">
    <h5>' . $message . '</h5>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>
  <h4 class="text-center mt-4">
    Sign Up
  </h4>
<form action="/phpAngkit/signup.php" method="POST" class="row">
  <div class="col-lg-5 mx-auto">
  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="email" name="username" class="form-control" id="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>
  <div class="mb-3">
    <label for="confirmPass" class="form-label">Password</label>
    <input type="password" name="confirmPass" class="form-control" id="confirmPass">
  </div>
    <button type="submit" class="btn btn-primary">signup</button>
  </div>
</form>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
