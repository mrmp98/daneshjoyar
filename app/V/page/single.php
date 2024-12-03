<?php
use app\M\data; 
$r = new data();

$y = ($r->REED(4, substr($_GET['url'], 4))); 
?> 
<html>
<head>
    <link rel="stylesheet" href="wive/index/css/bootstrap.css">
    <link rel="stylesheet" href="wive/index/css/font-awesome.min.css">
    <link rel="stylesheet" href="wive/index/css/owl.carousel.css">
    <link rel="stylesheet" href="wive/index/css/owl.theme.default.css">
    <link rel="stylesheet" href="wive/style.css">
    <style>
        #a {
            font-size: small;
            width: 100%; /* تغییر عرض به 100% */
            max-width: 800px; /* حداکثر عرض برای جلوگیری از بزرگ شدن بیش از حد */
            max-height: 300px; /* حداکثر ارتفاع برای جلوگیری از بزرگ شدن بیش از حد */
            text-align: center;
            word-wrap: break-word; /* متن طولانی را به خط بعدی می‌آورد */
            overflow-wrap: break-word; /* متن طولانی را به خط بعدی می‌آورد */
            background-color: rgb(236, 236, 236);
            padding: 15px; /* کمی فاصله داخلی برای زیبایی */
            margin: 0 auto; /* مرکز کردن باکس */
            overflow: hidden; /* پنهان کردن متن اضافی */
            white-space: normal; /* اجازه به متن برای شکستن به خطوط جدید */
            line-height: 1.5; /* تنظیم فاصله بین خطوط */
        }
    </style>
</head>
<body>
    <div class="single_post">
        <div class="container-fluid">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="post_img">
                            <img src="img/696112501123546.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="post_content " style="height: auto;"> <!-- تغییر ارتفاع به auto -->
                    <h4 id="a"><?php echo $y['titel']; ?></h4>
                    <p id="a"><?php echo $y['post']; ?></p>
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
        <div class="footer">
            <div class="container-fluid">
                <div class="col-md-5">
                    <div class="footer-box">
                        <span class="title">مجله seo90</span>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis est voluptate nihil hic nulla, voluptatem repudiandae quam eius delectus neque minus earum omnis, quas ullam porro aperiam veritatis ut exercitationem?      
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-box contact-box">
                        <span class="title">تماس با ما</span>
                        <p><i class="fa fa-phone"></i> 09155631125</p>
                        <p><i class="fa fa-phone"></i> 09155631125</p>
                        <p><i class="fa fa-envelope-o"></i> amirmp2332@gmail.com</p>
                        <p><i class="fa fa-map-marker"></i> بیرجند</p>
                    </div>
                </div>
                <div class="clear-fix"></div>
            </div>
        </div>
        <div class="end-wrapper">
            <div class="container-fluid">
                <div class="col-md-6">
                    <div class="copy-r">
                        <p>&copy; تمامی حقوق متعلق به سئو 90 می باشد</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="creator text-left">
                        <p>طراحی سایت ، سئو 90</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg"></div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/index.js"></script>
    </body>
</html>