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


<div class="container mt-5">
  <div class="mt-5">
    <h1>لیست کتاب ها</h1>
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

      </tbody>
    </table>
  </div>
</div>

<div style="height: 7rem;"></div>


<!-- Footer -->
<?php
include_once('./inc/footer.php')
?>