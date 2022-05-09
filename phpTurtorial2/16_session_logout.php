<?php
// start the session ad=nd get the data
session_start();
session_unset();
session_destroy();
echo "you have been logout";
