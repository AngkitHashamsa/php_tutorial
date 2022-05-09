<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title><?php
echo "hello world";
?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
  <div class="container">
      <a class="navbar-brand" href="#"><?php
echo "Navbar";
?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="/phpAngkit/4_form.php">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>


  </nav>
  <div class="container">
    <h1><?php
echo "hello world";
?></h1>
    <div class="alert alert-primary" role="alert">
      A simple primary alert—check it out!
    </div>
    <p>
  <?php
$name = "Angkit";
$income = 200.08;
echo "this guy is $name and he earns rs $income this much";
?>
  </p>
  <p>
Bool
<?php
$isOpen = false;

echo $isOpen == false ? 'false' : 'true';
?>
  </p>
  <p class="mt-4">
    Array
  <?php
$friends = array("name", "age", "number");
echo $friends[0];
echo "<br>";
echo var_dump($friends);

$nullName = null;
echo "<br>";

echo $nullName;
echo var_dump($nullName);

?>
  </p>
    <p class="mt-4">
      <h4>String Functions</h4>
      <?php
$string = "very long name";
echo "string= " . "'$string'";
echo "<br>";
echo "The length of" . "the strlen(string) string is= " . strlen($string);
echo "<br>";
echo "Word count str_word_count(string)=  " . str_word_count($string);
echo "<br>";
echo "Reverse string strrev(string)= " . strrev($string);
echo "<br>";
echo "Search index of a word 'long'= " . strpos($string, "long");
echo "<br>";
echo "replace string= " . str_replace("very", "very much", $string);
echo "<br>";
echo "repeat string = " . str_repeat($string, 4);
echo "<br>";
echo "<pre>";
echo "Trim \"  this is a good boy  \" =";
echo "right trim = ";
echo rtrim("
      this is a good boy
") . ";";
echo " left trim =";
echo ltrim("
      this is a good boy
");

echo "<pre>";

?>
    </p>

<p class="mt-6">
  <h4>Operators</h4>
  <?php
$x = 3;
$y = 4;
echo " x=3 and y=4 <br> is x == y ? " . ($x == $y ? "true" : "false");
?>
</p>
<p class="mt-6">
  <h4>Loops</h4>
  <h5>while loop</h5>
  <?php
$x = 0;
while ($x < 10) {
    $x++;
    echo $x . ",\t";
}

?>
 <h5>for loop</h5>
 <?php
for ($i = 0; $i < 10; $i++) {

    echo $i;
}
echo "<br>";
for ($i = 10; $i >= 0; $i--) {
    echo $i . "\t";
}
?>
</p>
<h5>For Each</h5>
 <?php
$arr = array("one", "two", "three", "three");
echo count($arr);
for ($i = 0; $i < count($arr); $i++) {
    # code...
    echo $arr[$i];
}
echo "<br>";
foreach ($arr as $value) {
    echo $value;
}
;
?>
<p class="mt-6">
  <h3>Functions</h3>
  <?php
function sum($num1, $num2)
{
    return $num1 + $num2;
};
echo "functions sum 1+2 = " . sum(1, 2);
echo "<br>";
echo "sum of marks";

$rohansArr = [23, 34, 45, 56, 67];
$chanuArr = [34, 56, 67, 78, 67];
function marksSum($marksArray)
{
    $sum = 0;
    foreach ($marksArray as $value) {
        $sum += $value;
    }
    return $sum;
};

function averagMark($markArray)
{
    $sum = 0;
    $i = 1;
    foreach ($markArray as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
};
$rohansMark = averagMark($rohansArr);
$chanuMark = averagMark($chanuArr);

echo "Rohan total = $rohansMark and chanu marks = $chanuMark"

?>

</p>
<p class="mt-4">
  <h4>Dates</h4>
  <?php
date_default_timezone_set('UTC');
$d = date("d l F Y G i A O T U");
echo "Todays day is $d";
$newDate = date('l jS \of F Y h:i:s A');
echo $newDate;

?>
</p>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>