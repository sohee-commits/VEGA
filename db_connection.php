<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "1234";
$dbName = "vega";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}