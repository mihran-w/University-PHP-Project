<?php
session_start();
if (!$_SESSION['username']) {
    header('location:../login.php');
}
?>
<?php
require_once("../inc/config.php");

$id = intval($_GET['id']);

$sqlStatus = "SELECT * FROM comments WHERE id = $id";
$status = mysqli_query($conn, $sqlStatus);

while ($row = mysqli_fetch_assoc($status)) {

    if ($row['status'] == 0) {
        $sql = "UPDATE `comments` SET `status` = '1' WHERE `comments`.`id` = $id;";
        mysqli_query($conn, $sql);
    } else {
        $sql = "UPDATE `comments` SET `status` = '0' WHERE `comments`.`id` = $id;";
        mysqli_query($conn, $sql);
    }
}
header("location:comments.php");
?>