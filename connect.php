<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$bdName = "crud";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $bdName);
if (!$conn) {
    die("Something went worng");
}
?>