<?php
session_start();
if (!$_SESSION['username']) {
    header('location:../login.php');
}
?>

<!-- Header -->
<?php
include_once('./inc/header.php')
?>

<?php
$id = intval($_GET["id"]);

require("../inc/config.php");

// Book
$sqlbook = "SELECT * FROM books WHERE id = $id";
$resultbook = mysqli_query($conn, $sqlbook);
$rowbook = mysqli_fetch_assoc($resultbook);

// Category
$catid = $rowbook['categoryId'];
$sqlcat = "SELECT * FROM categories WHERE id = $catid";
$resultcat = mysqli_query($conn, $sqlcat);
$rowcat = mysqli_fetch_assoc($resultcat);

?>

<div class="container mt-5 mb-5">
    <h1><i class="bi bi-pencil-square text-primary me-1"></i>ویرایش کتاب</h1>
    <hr>
    <div class="container">
        <form action="EditBook.php?id=<?= $id ?>" method="post" enctype="multipart/form-data" class="mt-5">
            <div class="row">
                <div class="mb-2">
                    <select class="form-select" name="category">
                        <option value="<?= $catid ?>"><?= $rowcat['name'] ?></option>
                        <?php
                        $sql = "SELECT * FROM categories WHERE id != $catid";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="name" class="form-label">نام کتاب :</label>
                    <input type="text" class="form-control" id="name" placeholder="نام کتاب را وارد کنید" name="name" value="<?= $rowbook["name"] ?>">
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label">توضیحات :</label>
                    <textarea class="form-control" id="description" rows="8" name="description" placeholder="توضیحات کتاب را وارد کنید" value="<?= $rowbook["description"] ?>"><?= $rowbook["description"] ?></textarea>
                </div>

                <div class="mb-2">
                    <label for="formFile" class="form-label">عکس مورد نظر را انتخاب کنید :</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                </div>

                <div class="mb-2">
                    <button type="submit" class="btn btn-success">ویرایش کتاب</button>
                </div>

            </div>
        </form>
    </div>
</div>

<div style="height: 7rem;"></div>



<?php

if ($_POST) {
    if ($_FILES['image']['size'] > 0) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

        $categoryId = $_POST['category'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        $sqlfin = "UPDATE books set categoryId = $categoryId, name = $name, description = $description, imagePath = $target_file WHERE id = $id";
        mysqli_query($conn, $sqlfin);
        mysqli_close($conn);
    } else {
        $categoryId = $_POST['category'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        // $target_file = $rowbook['imagePath'];
        $sqlfin = "UPDATE `books` SET `categoryId` = '$categoryId', `name` = '$name', `description` = '$description' , `imagePath` = '$target_file' WHERE `books`.`id` = $id;";
        mysqli_query($conn, $sqlfin);
        // echo var_dump($sql);
        mysqli_close($conn);
        // header('Location: bookAdd.php ');
    }
}
?>


<!-- Footer -->
<?php
include_once('./inc/footer.php')
?>