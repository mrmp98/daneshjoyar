<?php
 use app\M\data ; 
 $r = new data() ; 
$t= $r->REED(2) ;
  print_r($t) ;
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
</head>
<body>
<div class="sidebar__nav border-top border-left  ">
    <span class="bars d-none padding-0-18"></span>
    <a class="header__logo  d-none" href="https://netcopy.ir"></a>
    <div class="profile__info border cursor-pointer text-center">
        <div class="avatar__img"><img src="img/pro.jpg" class="avatar___img">
            <input type="file" accept="image/*" class="hidden avatar-img__input">
            <div class="v-dialog__container" style="display: block;"></div>
            <div class="box__camera default__avatar"></div>
        </div>
        <span class="profile__name">کاربر : نت کپی</span>
    </div>

    <ul>
        <li class="item-li i-dashboard "><a href="index.html">داشبورد</a></li>
        <li class="item-li i-courses "><a href="courses.html">دوره ها</a></li>
        <li class="item-li i-users"><a href="users.html"> کاربران</a></li>
        <li class="item-li i-categories"><a href="categories.html">دسته بندی ها</a></li>
        <li class="item-li i-slideshow"><a href="slideshow.html">اسلایدشو</a></li>
        <li class="item-li i-banners"><a href="banners.html">بنر ها</a></li>
        <li class="item-li i-articles is-active"><a href="articles.html">مقالات</a></li>
        <li class="item-li i-ads "><a href="ads.html">تبلیغات</a></li>
        <li class="item-li i-comments"><a href="comments.html"> نظرات</a></li>
        <li class="item-li i-tickets"><a href="tickets.html"> تیکت ها</a></li>
        <li class="item-li i-discounts"><a href="discounts.html">تخفیف ها</a></li>
        <li class="item-li i-transactions"><a href="transactions.html">تراکنش ها</a></li>
        <li class="item-li i-checkouts"><a href="checkouts.html">تسویه حساب ها</a></li>
        <li class="item-li i-checkout__request "><a href="checkout-request.html">درخواست تسویه </a></li>
        <li class="item-li i-my__purchases"><a href="mypurchases.html">خرید های من</a></li>
        <li class="item-li i-my__peyments"><a href="mypeyments.html">پرداخت های من</a></li>
        <li class="item-li i-notification__management"><a href="notification-management.html">مدیریت اطلاع رسانی</a>
        </li>
        <li class="item-li i-user__inforamtion"><a href="user-information.html">اطلاعات کاربری</a></li>
    </ul>

</div>
<div class="content">
    <div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
        <div class="header__right d-flex flex-grow-1 item-center">
            <span class="bars"></span>
            <a class="header__logo" href="https://netcopy.ir"></a>
        </div>
        <div class="header__left d-flex flex-end item-center margin-top-2">
            <span class="account-balance font-size-12">موجودی : 2500,000 تومان</span>
            <div class="notification margin-15">
                <a class="notification__icon"></a>
                <div class="dropdown__notification">
                    <div class="content__notification">
                        <span class="font-size-13">موردی برای نمایش وجود ندارد</span>
                    </div>
                </div>
            </div>
            <a href="" class="logout" title="خروج"></a>
        </div>
    </div>
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