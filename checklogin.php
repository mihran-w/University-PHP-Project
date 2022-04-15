<?php
session_start();
$usrName = $_POST['usrName'];
$pswd = $_POST['pswd'];

// Set Cookie
if (@$_POST['remember']) {
    setcookie('myUserName', $usrName, time() + 60, '/');
    setcookie('myRemember', 1, time() + 60, '/');
}

require_once('./inc/config.php');

$sql = "SELECT password FROM users WHERE username = '$usrName' AND password = '$pswd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $usrName;
    header('location:admin/index.php');
} else {
    header('location:login.php');
}
