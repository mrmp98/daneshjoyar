<?PHP
use app\M\data ; 
 $r = new data() ; 
 $t = $r->REED() ;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
<title>قالب پنل مدیریت |نت کپی</title>    <link rel="stylesheet" href="wive/style.css">
    <link rel="stylesheet" href="wive/index/css/responsive_991.css" media="(max-width:991px)">
    <link rel="stylesheet" href="wive/index/css/responsive_768.css" media="(max-width:768px)">
    <link rel="stylesheet" href="css/font.css">
</head>
<body>
<?php
require_once __DIR__ . '/../datebendi/dastebandi.php' ;
?>
<div class="content">
    
    <div class="main-content font-size-13">
        
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
            <div class="t-header-search">
                <form action="" onclick="event.preventDefault();">
                    <div class="t-header-searchbox font-size-13">
                        <div class="t-header-search-content ">
                            <input type="text"  class="text"  placeholder="ایمیل">
                    
                            <input type="text"  class="text margin-bottom-20" placeholder="نام و نام خانوادگی">
                            <btutton class="btn btn-netcopy_net">جستجو</btutton>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>نام و نام خانوادگی</th>
                    <th>ایمیل</th>
                    <th>سطح کاربری</th>
                  
                </tr>
                </thead>
                <tbody>
                
                    <?php for ($i=0; $i < count($t) ; $i++) { 
                       
                        print_r("<tr role='row' class=''>") ; 
                            print_r("<th> " . $t[$i]['id']  .  "</th>" ) ; 
                            print_r("<th> " . $t[$i]['user']  .  "</th>" ) ; 
                            print_r("<th> " . $t[$i]['email']  .  "</th>" ) ; 
                            print_r("<th> عادی</th>" ) ; 
                            print_r("</tr>") ; 
                        } ; 
                       ?>
                
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
<script src="wive/index/js/jquery-3.4.1.min.js"></script>
<script src="wive/index/js/js.js"></script>
</html>