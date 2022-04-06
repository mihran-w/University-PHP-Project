<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه ورود کاربر</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-icons-1.7.2/bootstrap-icons.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/favicon.png" type="image/x-icon">
</head>

<body>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card shadow" style="width: 50%;">
                <div class="card-header text-center p-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <i class="bi bi-box-arrow-in-left fs-3 text-primary"></i>
                        <h3 class="ms-2 mb-0">
      ورود به داشبورد مدیریت                             
                        </h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="./checklogin.php" method="post">
                        <div class="mb-2">
                            <label for="username" class="form-label">نام کاربری</label>
                            <input type="text" class="form-control" id="username" name="usrName">
                            <div class="form-text">لطفا نام کاربری خود را به انگلیسی وارد کنید.</div>
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">کلمه عبور</label>
                            <input type="password" class="form-control" id="password" name="pswd">
                        </div>
                        <div class="mb-2 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">مرا بخاطر بسپار</label>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">ورود به حساب</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="./assets/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>