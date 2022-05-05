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
require_once("../inc/config.php");
$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
?>

<div class="container mt-5 mb-5">
    <h1><i class="bi bi-plus-square-dotted text-primary me-1"></i>افزودن کتاب جدید</h1>
    <hr>
    <div class="container">
        <form action="Addbooks.php" method="POST" class="mt-5">
            <div class="row">
                <div class="mb-2">
                    <select class="form-select" name="category">
                        <option selected>انتخاب کنید</option>
                        <?php
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
                    <input type="text" class="form-control" id="name" placeholder="نام کتاب را وارد کنید" name="name">
                </div>
                <div class="mb-2">
                    <label for="description" class="form-label">توضیحات :</label>
                    <textarea class="form-control" id="description" rows="8" name="description" placeholder="توضیحات کتاب را وارد کنید"></textarea>
                </div>

                <div class="mb-2">
                    <label for="formFile" class="form-label">عکس مورد نظر را انتخاب کنید :</label>
                    <input class="form-control" type="file" name="image" id="formFile">
                </div>

                <div class="mb-2">
                    <button type="submit" class="btn btn-success">ثبت کتاب</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div style="height: 7rem;"></div>


<!-- Footer -->
<?php
include_once('./inc/footer.php')
?>