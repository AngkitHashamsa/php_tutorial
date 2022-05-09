

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
<div class="container">
  <h1>Associative Array</h1>
<?php
$favCol = array(
    "ANg" => "red",
    "name" => "blue",
    "raghu" => "green",
    8 => "no",
);
echo $favCol["name"];
echo "<br>";
echo $favCol[8];
echo "<br>";
$i = 1;

foreach ($favCol as $key => $value) {

    echo " $i) Fav  color of $key is $value <br>";
    $i++;

}
;
?>
<p class="mt-6">
  <h3>Multi Dimensional Arrays</h3>
<?php
$multi = array(
    array(1, 2, 3, 4),
    array(1, 2, 3, 5),
    array(4, 5, 4, 3),
);
// echo $multi[1][3];
for ($i = 0; $i < count($multi); $i++) {
    // echo var_dump($multi[$i]);
    echo "<br>";
    for ($j = 0; $j < count($multi[$i]); $j++) {
        echo $multi[$i][$j];
        echo " ";
    }
    ;
}
;
?>
</p>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>