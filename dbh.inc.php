<?php

$dBservername= "datadev.devcatalyst.com";
$dBUsername= "mahs_GetErDone@localhost";
$dBPassword = "mustangs";
$dBName = "mahs_GetErDone";

$conn = mysqli_connect($dBservername, $dBUsername, $dBPassword, $dBName);
// Create connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}

?>