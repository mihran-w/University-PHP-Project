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

$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "id : " . $row["id"] . "   " . "Name : " . $row["name"];
        echo "</br>";
    }
}

