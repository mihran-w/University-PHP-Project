<?php
$categoryId = intval($_GET['id']);
require_once('../inc/config.php');
$sql = "DELETE FROM categories WHERE id=$categoryId";
mysqli_query($conn, $sql);
header('location:categoryShow.php');
?>