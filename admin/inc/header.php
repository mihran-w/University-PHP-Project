<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>داشبورد مدیریت وبسایت</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-icons-1.7.2/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" href="../assets/img/favicon.png" type="image/x-icon">
</head>

<body>


    <?php
    function GetIp()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        return $ip;
    }
    ?>

    <div class="preloader"></div>


    <!-- Header -->
    <div id="top-header" class="container-fluid rounded-3">
        <!-- Navigation -->
        <div class="shadow bg-primary-1 rounded-3">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">
                                        <i class="bi bi-speedometer"></i>
                                        داشبورد
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                        دسته بندی ها
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="categoryAdd.php"> <i class="bi bi-plus-square-dotted text-primary me-1"></i>افزودن دسته بندی</a></li>
                                        <li><a class="dropdown-item" href="categoryShow.php"><i class="bi bi-binoculars text-primary me-1"></i>مشاهده دسته بندی ها</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                                        کتاب ها
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="bookAdd.php"> <i class="bi bi-plus-square-dotted text-primary me-1"></i>افزودن کتاب</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="comments.php">نظرات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">کاربر : <?php echo (GetIp()); ?></a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        تنظیمات
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">تغییر رمز</a></li>
                                        <li><a class="dropdown-item" href="#">حالت تیره</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="../logout.php">خروج از حساب</a></li>
                                    </ul>
                                </li>


                            </ul>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>