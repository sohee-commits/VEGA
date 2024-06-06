<?php

$hostName = "localhost";
$dbUser = "p904840y_0";
$dbPassword = "Qwerty_7890";
$dbName = "p904840y_0";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}