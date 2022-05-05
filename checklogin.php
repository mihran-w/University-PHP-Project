<?php
session_start();

require_once('./inc/config.php');

$usrName = mysqli_real_escape_string($conn, $_POST['usrName']);
$pswd = mysqli_real_escape_string($conn, $_POST['pswd']);

// MD5 Hashing
$pswd = md5($pswd);

// Set Cookie
if (@$_POST['remember']) {
    setcookie('myUserName', $usrName, time() + 60, '/');
    setcookie('myRemember', 1, time() + 60, '/');
}


$sql = "SELECT * FROM users WHERE username = '$usrName' AND password = '$pswd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $usrName;
    header('location:admin/index.php');
} else {
    header('location:login.php');
}
