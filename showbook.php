<!-- Header -->
<?php
include('./inc/header.php')
?>

<?php
require_once("./inc/config.php");

$bookId = intval($_GET["id"]);

$sql_book = "SELECT * FROM books WHERE id = $bookId";
$result = mysqli_query($conn, $sql_book);
?>
<div class="container mt-3">
    <div class="row g-3">
        <div class="col-md-9">
            <div class="row">

                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>

                    <article class="card p-3 shadow-sm">
                        <div class="d-flex">
                            <img src="<?= "admin/" . $row["imagePath"] ?>" alt="<?= $row["name"] ?>" width="500" height="250" class="img-fluid rounded-3">
                            <div class="ms-3 mt-3">
                                <h2 class="mb-3">نام کتاب : <?= $row["name"] ?></h2>
                                <span class="text-muted fs-6">تاریخ انتشار : <?= $row["creationDate"] ?></span>
                                <p class="fw-bold mt-3">
                                    چکیده :
                                    <span class="fw-normal">
                                        <?= $row["shortDes"] ?>
                                    </span>
                                </p>
                            </div>
                        </div>

                        <div class="card-body mt-5">
                            <?= $row["description"] ?>
                        </div>

                        <div class="card-footer text-center">
                            <p class="fs-7 text-muted">
                                تمامی حقوق مادی و معنوی این اثر نزد نویسنده و ناشر آن محفوظ می گردد.
                            </p>
                        </div>
                    </article>


                <?php } ?>

                <div class="mt-5">
                    <div class="card p-3 shadow-sm ">
                        <p class="fw-bold">دیدگاه شما :</p>
                        <div class="card-body">

                            <div id="commentalert">

                            </div>

                            <form id="send" action="" method="POST">
                                <input type="hidden" name="bookId" value="<?= $bookId ?>">
                                <div class="row gy-2">
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="نام و نام خانوادگی " name="fullname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-2">
                                            <input type="text" class="form-control" placeholder="نام وبسایت" name="website">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea name="comment" id="comment" cols="30" rows="10" placeholder="دیدگاه ..." class="form-control"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn btn-success" type="submit">ثبت دیدگاه</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="col-md-3">

            <div class="card mb-4">
                <div class="card-header p-2"><i class="bi bi-link-45deg fs-5 me-2"></i>جستجو مطالب</div>
                <div class="card-body">
                    <form action="search.php" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="search" placeholder="جستجو...">
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
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
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
<script src="../assets/js/sweetAlert.js"></script>
<script>
    $("#send").submit(function(e) {
        e.preventDefault();
        $.ajax({
            type: "post",
            url: "addComment.php",
            data: $(this).serialize(),
            success: function() {
                Swal.fire({
                    title: 'دیدگاه شما با موفقیت ثبت شد و پس از تایید توسط ادمین در وبسایت قرار داده خواهد شد.',
                    icon: 'success',
                    confirmButtonText: 'مرسی',
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload();
                    }
                })
            },
        });
    });
</script>