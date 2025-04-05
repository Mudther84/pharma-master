<?php
$host = "localhost"; // اسم السيرفر
$dbname = "pharma_db"; // اسم قاعدة البيانات
$username = "root"; // اسم المستخدم (افتراضي في XAMPP هو root)
$password = ""; // كلمة المرور (افتراضي في XAMPP فارغة)

try {
    // إنشاء اتصال PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // تأكيد نجاح الاتصال
    // echo "تم الاتصال بقاعدة البيانات بنجاح!";
} catch (PDOException $e) {
    die("فشل الاتصال بقاعدة البيانات: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pharma &mdash; Colorlib Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700|Crimson+Text:400,400i" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="site-wrap">

        <div class="site-navbar py-2">

            <div class="search-wrap">
                <div class="container">
                    <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
                    <form action="#" method="post">
                        <input type="text" class="form-control" placeholder="ابحث عن كلمة واضغط إدخال...">
                    </form>
                </div>
            </div>

            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo">
                        <div class="site-logo">
                            <a href="index.html" class="js-logo-clone">فارما</a>
                        </div>
                    </div>
                    <div class="main-nav d-none d-lg-block">
                        <nav class="site-navigation text-right text-md-center" role="navigation">
                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li><a href="index.html">الرئيسية</a></li>
                                <li><a href="shop.html">المتجر</a></li>
                                <li class="has-children">
                                    <a href="#">القائمة المنسدلة</a>
                                    <ul class="dropdown">
                                        <li><a href="#">المكملات الغذائية</a></li>
                                        <li class="has-children">
                                            <a href="#">الفيتامينات</a>
                                            <ul class="dropdown">
                                                <li><a href="#">المكملات الغذائية</a></li>
                                                <li><a href="#">الفيتامينات</a></li>
                                                <li><a href="#">الحمية والتغذية</a></li>
                                                <li><a href="#">الشاي والقهوة</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">الحمية والتغذية</a></li>
                                        <li><a href="#">الشاي والقهوة</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">معلومات عنا</a></li>
                                <li class="active"><a href="contact.html">اتصل بنا</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="icons">
                        <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
                        <a href="cart.html" class="icons-btn d-inline-block bag">
                            <span class="icon-shopping-bag"></span>
                            <span class="number">2</span>
                        </a>
                        <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                                class="icon-menu"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-light py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-0">
                        <a href="index.html">الرئيسية</a> <span class="mx-2 mb-0">/</span>
                        <strong class="text-black">اتصل بنا</strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="h3 mb-5 text-black">تواصل معنا</h2>
                    </div>
                    <div class="col-md-12">

                        <form action="contackt.php" method="post">

                            <div class="p-3 p-lg-5 border">
                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label for="c_fname" class="text-black">الاسم الأول <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_fname" name="c_fname">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="c_lname" class="text-black">الاسم الأخير <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_lname" name="c_lname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_email" class="text-black">البريد الإلكتروني <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="c_email" name="c_email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_subject" class="text-black">الموضوع </label>
                                        <input type="text" class="form-control" id="c_subject" name="c_subject">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label for="c_message" class="text-black">الرسالة </label>
                                        <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="إرسال الرسالة">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    $host = "localhost";
    // اسم السيرفر
    $dbname = "pharma_db";
    // اسم قاعدة البيانات
    $username = "root";
    // اسم المستخدم (في xampp يكون root افتراضيًا)
    $password = "";
    // كلمة المرور (في xampp تكون فارغة افتراضيًا)

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("فشل الاتصال بقاعدة البيانات: " . $e->getMessage());
    }
    ?>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>
    <script src="/js/fect api.js"></script>

</body>

</html>