<!-- Send Form Data in the DataBase -->
<?php
require_once("./inc/config.php");
if ($_POST) {
    $bookId = $_POST['bookId'];
    $fullname = $_POST['fullname'];
    $website = $_POST['website'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `comments` (`bookId`, `fullname`, `website`, `comment`) VALUES ( '$bookId', '$fullname', '$website', '$comment')";
    mysqli_query($conn, $sql);
}
?> 
