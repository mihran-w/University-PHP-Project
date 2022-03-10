<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "unicms_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Filed : " . mysqli_connect_error());
}
mysqli_set_charset($conn,"utf8");





