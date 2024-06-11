<?php
$servername = 'localhost';
$dbname = 'p904840y_8';
$username = 'p904840y_8';
$password = 'S1S&c8pT';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
