<?php
$loggedIn = false;
if (isset($_SESSION['loggin']) == true) {
    global $loggedIn;
    $loggedIn = true;
}
;
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="/phpAngkit/welcome.php">Anime</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/phpAngkit/welcome.php">Home</a>
        </li>';
if ($loggedIn == true) {
    echo '<li class="nav-item">
          <a class="nav-link" href="/phpAngkit/logout.php">Log out</a>
        </li>';
} else {
    echo '<li class="nav-item">
        <a class="nav-link" href="/phpAngkit/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/phpAngkit/signup.php">Sign Up</a>
        </li>
      ';
}
echo '</ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>';
