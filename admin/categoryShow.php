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


<div class="container mt-5">
  <div class="mt-5">
    <h1>لیست دسته بندی ها</h1>
    <hr>
    <table class="table table-bordered table-hover table-striped table-primary mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">نام دسته بندی</th>
          <th scope="col">توضیحات</th>
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
            <td><?= $row['name'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
              <a href="categoryDelete.php?id=<?= $row['id'] ?>" class="btn btn-danger"><i class="bi bi-trash fs-5 lh-0 m-auto"></i></a>
              <a href="categoryEdit.php?id=<?= $row['id'] ?>" class="btn btn-primary"><i class="bi bi-pencil-square fs-5 lh-0 m-auto"></i></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>


<!-- <div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->

<div style="height: 7rem;"></div>


<!-- Footer -->
<?php
include_once('./inc/footer.php')
?>