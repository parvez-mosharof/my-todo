<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "journal";

// this Creates connection
$conn = new mysqli($host, $user, $pass, $dbname);

//this Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
