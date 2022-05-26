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
$sql = "SELECT * FROM comments ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>


<div class="container mt-5">
  <div class="mt-5">
    <h1>مدیریت نظرات کاربران</h1>
    <hr>
    <table class="table table-bordered table-hover table-striped table-primary mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">نام کاربر</th>
          <th scope="col">نام وبسایت</th>
          <th scope="col">دیدگاه</th>
          <th scope="col">وضعیت</th>
          <th scope="col">عملیات</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $counter = 0;
        while ($row = mysqli_fetch_assoc($result)) {
          $counter += 1;
        ?>
          <tr>
            <th scope="row"><?= $counter ?></th>
            <td><?= $row['fullname'] ?></td>
            <td><?= $row['website'] ?></td>
            <td><?= $row['comment'] ?></td>
            <td class="d-flex justify-content-between align-items-center">
              <a class="btn " href="addCommentStatus.php?id=<?= $row['id'] ?>">
                <?php
                if ($row['status'] == 1) {
                  echo '<i class="bi bi-check-circle-fill fs-4 text-success"></i>';
                } else {
                  echo '<i class="bi bi-check-circle fs-4 text-danger"></i>';
                }
                ?>
              </a>

              <div>
                <?php
                if ($row['status'] == 1) {
                  echo '<p class="fs-7 text-success">منتشر شده</p>';
                } else {
                  echo '<p class="fs-7 text-danger">در انتظار تایید</p>';
                }
                ?>
              </div>
            </td>
            <td>
              <a href="deleteComment.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash fs-5 lh-0 m-auto"></i></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<div style="height: 7rem;"></div>


<!-- Footer -->
<?php
include_once('./inc/footer.php')
?>

<script>
  $("#sendStatus").submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: "post",
      url: "addCommentStatus.php",
      data: $(this).serialize(),
    });
  });
</script>