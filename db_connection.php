<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "1234";
$dbname = "vega";
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n" . $conn->error);
return $conn;
