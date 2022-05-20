<?php
session_start();
if (!$_SESSION['username']) {
    header('location:../login.php');
}
?>
<?php
require("../inc/config.php");
$id = intval($_GET["id"]);

$sqlbook = "SELECT * FROM books WHERE id = $id";
$resultbook = mysqli_query($conn, $sqlbook);
$rowbook = mysqli_fetch_assoc($resultbook);

if ($_POST) {
    if ($_FILES['image']['size'] > 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $categoryId = $_POST['category'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $sqlfin = "UPDATE `books` SET `categoryId` = '$categoryId', `name` = '$name', `description` = '$description' , `imagePath` = '$target_file' WHERE `books`.`id` = $id;";
        mysqli_query($conn, $sqlfin);
        mysqli_close($conn);
        header('Location: index.php ');
    } else {
        $categoryId = $_POST['category'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $target_file = $rowbook['imagePath'];
        $sqlfin = "UPDATE `books` SET `categoryId` = '$categoryId', `name` = '$name', `description` = '$description' , `imagePath` = '$target_file' WHERE `books`.`id` = $id;";
        mysqli_query($conn, $sqlfin);
        // echo var_dump($sql);
        mysqli_close($conn);
        header('Location: index.php ');
    }
}
