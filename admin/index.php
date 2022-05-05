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
// require_once("./utilities/toshamsi.php");

$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);
?>

<div class="container mt-3">
    <div class="row g-3">
        <div class="col-md-9">
            <div class="row">

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-6">
                        <div class="card shadow-sm mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="<?= $row['imagePath'] ?>" alt="title" class="img-fluid rounded-3">
                                    </div>
                                    <div class="col-md-9">
                                        <h4>
                                            <?= $row['name'] ?>
                                        </h4>
                                        <p>
                                            <?= $row['description'] ?>
                                        </p>
                                        <span class="fs-6 text-muted">
                                            تاریخ انتشار :
                                            <?= $row['creationDate'] ?>
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
            <div class="card">
                <div class="card-header p-2"><i class="bi bi-newspaper fs-5 me-2"></i>آخرین اخبار وبسایت</div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="hover-li"><a href="#" class="text-decoration-none text-dark"><i class="bi bi-caret-left-fill me-1"></i>لورم ایپسوم</a></li>
                        <li class="hover-li"><a href="#" class="text-decoration-none text-dark"><i class="bi bi-caret-left-fill me-1"></i>لورم ایپسوم </a></li>
                        <li class="hover-li"><a href="#" class="text-decoration-none text-dark"><i class="bi bi-caret-left-fill me-1"></i>لورم ایپسوم</a></li>
                        <li class="hover-li"><a href="#" class="text-decoration-none text-dark"><i class="bi bi-caret-left-fill me-1"></i>لورم ایپسوم</a></li>
                    </ul>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-header p-2"><i class="bi bi-link-45deg fs-5 me-2"></i>لینک های مفید</div>
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li class="hover-li"><a href="#" class="text-decoration-none text-dark"><i class="bi bi-caret-left-fill me-1"></i>لورم ایپسوم</a></li>
                        <li class="hover-li"><a href="#" class="text-decoration-none text-dark"><i class="bi bi-caret-left-fill me-1"></i>لورم ایپسوم</a></li>
                        <li class="hover-li"><a href="#" class="text-decoration-none text-dark"><i class="bi bi-caret-left-fill me-1"></i>لورم ایپسوم</a></li>
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