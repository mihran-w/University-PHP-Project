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

<div class="container mt-5 mb-5">
    <h1><i class="bi bi-plus-square-dotted text-primary me-1"></i>افزودن دسته بندی جدید</h1>
    <hr>
    <div class="container">
        <form action="AddCategories.php" method="POST" class="mt-5">
            <div class="mb-2">
                <label for="name" class="form-label">نام دسته بندی :</label>
                <input type="text" class="form-control" id="name" placeholder="نام دسته بندی را وارد کنید" name="name">
            </div>
            <div class="mb-2">
                <label for="description" class="form-label">توضیحات :</label>
                <textarea class="form-control" id="description" rows="8" name="description" placeholder="توضیحات دسته بندی را وارد کنید"></textarea>
            </div>
            <div class="mb-2">
                <button type="submit" class="btn btn-success">ثبت دسته بندی</button>
            </div>
        </form>
    </div>
</div>

<div style="height: 7rem;"></div>



<!-- Footer -->
<?php
include_once('./inc/footer.php')
?>