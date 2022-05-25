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

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $categoryId = $_POST['category'];
    $name = $_POST['name'];
    $shortDes = $_POST['shortDes'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `books` (`categoryId`, `name`, `shortDes`, `description`, `imagePath`, `creationDate`) VALUES ( '$categoryId', '$name', '$shortDes', '$description', '$target_file', CURRENT_TIMESTAMP);";
    mysqli_query($conn, $sql);
}
header('location:index.php');
?>