<?php
echo "Cookies";

// syntax for cookie;
// Return the current time as a Unix timestamp, then format it to a date:
echo "<br> time" . time();
// name,value,exp in , domain
setcookie("category", "Books", time() + 86400, "/");

echo "<br> the cookie is set";
