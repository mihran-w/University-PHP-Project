<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی دانشگاه فنی و حرفه ای تبریز</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons-1.7.2/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
</head>

<body>


    <!-- Header -->
    <div id="top-header" class="container rounded-3">
        <!-- Brand Logo -->
        <div class="row align-items-center justify-content-center g-4">
            <div class="col-md-4">
                <a href="index.php">
                    <img src="./assets/img/logo-main.png" alt="WebSite Logo" class="img-fluid m-2">
                </a>
            </div>

            <div class="col-md-4 offset-md-4">
                <img src="./assets/img/popup-banner.gif" alt="WebSite Logo" class="img-fluid m-3" height="150px" width="300px">
            </div>
        </div>
        <!-- Navigation -->
        <div class="shadow bg-primary-1 rounded-3">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#"> 
                                    <i class="bi bi-house-door"></i>
                                    صفحه اصلی
                                    </a>
                                </li>
                                <?php
                                require_once('./inc/config.php');
                                $sql = "SELECT * FROM categories";
                                $result = mysqli_query($conn, $sql);
                                ?>
                                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><?= $row['name'] ?></a>
                                    </li>
                                <?php } ?>


                            </ul>
                            <div class="">
                                <a class="text-dark text-decoration-none" href="./login.php">
                                    <i class="bi bi-door-open"></i>
                                    ورود
                                </a>
                                </div>
                            <!-- <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="جستجو ..."">
                            <button class=" btn btn-secondary" type="submit">جستجو</button>
                            </form> -->
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>