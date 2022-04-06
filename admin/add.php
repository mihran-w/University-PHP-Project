<?php
session_start();
if (!$_SESSION['username']) {
    header('location:../login.php');
}
?>
<!-- Send Form Data in the DataBase -->
<?php
require_once("../inc/config.php");
if ($_POST) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `categories` (`name`, `description`) VALUES ( '$name', '$description')";
    mysqli_query($conn, $sql);
}
header('location:categoryShow.php');
?>