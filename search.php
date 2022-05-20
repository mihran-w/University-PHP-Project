<!-- Header -->
<?php
include('./inc/header.php')
?>

<?php
require("./inc/config.php");

if ($_POST) {
    $search = @mysqli_real_escape_string($conn, $_POST['search']);
}

$sql_any = @"SELECT * FROM books WHERE `name` IS NULL OR `name` = ' ';";
$sql_book = @"SELECT * FROM books WHERE `name` LIKE '%$search%' OR `description` LIKE '%$search%'";
$result = @mysqli_query($conn, $sql_book);
?>
<div class="container mt-3">
    <h4 class="mb-4">
        نتایج جستجو برای : <?= @$search ?>
    </h4>
    <div class="row g-3">
        <div class="col-md-9">
            <div class="row">
                <?php
                if (@$search == null) {
                    echo '<div class="alert alert-danger"><p>عنوانی برای جستجو وارد نشده است</p></div>';
                    echo ' <div class="mt-5"><h5 class="fw-bold mb-4">مطالب پیشنهادی :</h5></div>';
                }
                ?>


                <?php
                while ($row = @mysqli_fetch_assoc($result)) {
                ?>
                   

                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="<?= "./admin/" . @$row['imagePath'] ?>" alt="title" class="img-fluid rounded-3">
                                    </div>
                                    <div class="col-md-9">
                                        <h4>
                                            <?= @$row['name'] ?>
                                        </h4>
                                        <p>
                                            <?= @$row['description'] ?>
                                        </p>
                                        <span class="fs-6 text-muted">
                                            تاریخ انتشار :
                                            <?= @$row['creationDate'] ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="col-md-3">

            <div class="card mb-4">
                <div class="card-header p-2"><i class="bi bi-link-45deg fs-5 me-2"></i>جستجو مطالب</div>
                <div class="card-body">
                    <form action="search.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="جستجو...">
                            <button class="btn btn-outline-primary" type="submit" id="button-addon1"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header p-2"><i class="bi bi-newspaper fs-5 me-2"></i>دسته بندی ها</div>
                <div class="card-body">
                    <ul class="list-unstyled">

                        <?php
                        $result = @mysqli_query($conn, $sql);
                        while ($row = @mysqli_fetch_assoc($result)) { ?>
                            <li class="hover-li"><a href="#" class="text-decoration-none text-dark"><i class="bi bi-caret-left-fill me-1"></i><?= $row['name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Footer -->
<?php
include_once('./inc/footer.php')
?>