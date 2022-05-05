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
    $categoryId = $_POST['category'];
    $name = $_POST['name'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `books` (`categoryId`, `name`, `description`, `imagePath`, `creationDate`) VALUES ( '$categoryId', '$name', '$description', '', CURRENT_TIMESTAMP);";
    mysqli_query($conn, $sql);
}
 header('location:categoryShow.php');
?>