<?php 

namespace App\C;
session_start();
use app\M\data ; 

class Signup 
{
    public function index ()
    {
        require __DIR__ . '/../V/signup/signup.html' ; 
    }
    public function c()
    {
      $r = new data(); 
      $name =    htmlspecialchars($_POST['name'])  ; 
      $email  =   htmlspecialchars($_POST['email']) ;
      $password =    htmlspecialchars($_POST['password'])     ;
      $r->inseret('user' , $name   , $password , 3 , $email  ) ;
      $t = $r->REED() ;
      $_SESSION['id'] = $t[0]['id'] ;  
      
      header('location: /mame/daneshjoyar/signin');
    }
}