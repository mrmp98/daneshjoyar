<?php 
namespace App\C; 
use app\M\data; 
class admin 
{
    public function articles (){
        require __DIR__ . '/../V/admin/articles.php';
    }
    
    public function categories (){
        require __DIR__ . '/../V/admin/categories.php';
    }
    public function categoriescontroler()
    {
        $r = new data() ; 
        $titel =  htmlentities($_POST['titel']) ; 
        $khabar = htmlentities($_POST['khabar']) ;
        $r->inseret('post' , $khabar  , $titel , '2' , '' , 0) ; 
        header('location: articles') ; 
    }
    public function users(){
        require __DIR__ . '/../V/admin/users.php';
    }
    public function del() {
      
        $r = new data() ; 
   
        $r->delet('post' ,substr($_GET['url'] , 12) ) ; 
        header('location: /mame/daneshjoyar/articles') ;
      
    }
    public function tik() {

        $r = new data() ;  
        $r->update('post' ,'stuat' ,  1 , 'id' , substr($_GET['url'] , 12)) ; 
        header('location: /mame/daneshjoyar/articles') ;

        
    }
}