<?php
$servername = "core7";
$username = "fnmmallc_mega-metal"; // Change to your database username
$password = "has1212san?"; // Change to your database password
$dbname = "fnmmallc_mega-metal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
