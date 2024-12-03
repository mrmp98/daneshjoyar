<?php
 use app\M\data ; 
 $r = new data() ; 
$t= $r->REED(2) ;
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<?php 
require_once __DIR__ . '/../datebendi/dastebandi.php' ; 
?>

    <div class="breadcrumb">
        <ul>
            <li><a href="index.html">پیشخوان</a></li>
            <li><a href="articles.html" class="is-active"> مقالات</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="articles.html">لیست مقالات</a>
            
            </div>
        </div>
  

        <div class="table__box">
            <table class="table">

                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>عنوان</th>
                 
                    <th>متن</th>
                    <th>تاریخ ایجاد</th>
                  
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <?php
                for($i=0 ; $i<count($t) ; $i++){ 
                print_r('<tr role="row" class="">'); 
                    
                print_r('<td><a href="">' . $t[$i]['id'] . ' </a></td>') ; 
                print_r('<td><a href="">' . $t[$i]['titel'] . '</a></td>') ; 
                
                 print_r('<td>' . $t[$i]['post'] . '</td>') ; 
                 
                print_r('<td> '  . $t[$i]['time'] . '</td>') ; 
                
                print_r('<td>') ; 
                print_r("<form action='' method='post'>") ; 
        print_r('  <a href="articles/DEL' .$t[$i]['id'] . '" class="bi bi-x-lg mlg-15" title="حذف"></a>');
        print_r('            <a href="articles/tik' .$t[$i]['id'] . ' " class="bi bi-check-lg mlg-15" title="تایید"></a>');
        
        print_r('        </td>');
        print_r('    </tr>');
    }
    print_r('</form>');
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