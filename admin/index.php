<?php
session_start();
if(!$_SESSION['username']){
    header('location:../login.php');
}
?>

    <!-- Header -->
    <?php
    include_once('./inc/header.php')
    ?>

    <div class="container mt-3">
        <div class="row g-3">
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-body">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                        طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای
                        شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                        زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم
                        افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان
                        فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط
                        سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل
                        دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</div>
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

    

