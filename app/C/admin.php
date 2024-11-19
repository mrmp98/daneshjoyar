<?php 
namespace App\C; 
class admin 
{
    public function articles (){
        require __DIR__ . '/../V/admin/articles.php';
    }
    public function banners (){
        require __DIR__ . '/../V/admin/banners.php';
    }
    public function categories (){
        require __DIR__ . '/../V/admin/categories.php';
    }
    public function slideshow(){
        require __DIR__ . '/../V/admin/slideshow.php';
    }
    public function users(){
        require __DIR__ . '/../V/admin/users.php';
    }
}