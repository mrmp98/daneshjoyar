<?php 
session_start() ; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
<title>قالب پنل مدیریت |نت کپی</title>    <link rel="stylesheet" href="wive/style.css">
    <link rel="stylesheet" href="wive/index/css/responsive_991.css" media="(max-width:991px)">
    <link rel="stylesheet" href="wive/index/css/responsive_768.css" media="(max-width:768px)">
    <link rel="stylesheet" href="wive/index/css/font.css">
</head>
<body>
<div class="content">
    <?php
    if($_SESSION['USER']== 'admin'){
require_once __DIR__ . '/../datebendi/dastebandi.php' ;
}
else{
    require_once __DIR__ . '/../datebendi/dastebandiuser.php' ; 
}
?>
    <div class="main-content padding-0 categories">
        <div class="row no-gutters  ">
            <div class="col-12 bg-white">
                  <p class="box__title">ایجاد خبر جدید </p>
                  <form action="" method="post" class="padding-30">
                      <input type="text" placeholder="titel" class="text" name="titel" required>
                      <input type="text" placeholder="متن خبر " class="text" name="khabar" required>
                      
                      <button class="btn btn-netcopy_net">اضافه کردن</button>
                  </form>
            </div>
        </div>
    </div>
</div>
</body>
<script src="wive/index/js/jquery-3.4.1.min.js"></script>
<script src="wive/index/js/js.js"></script>
<script src="wive/index/js/tagsInput.js"></script>
</html>