<?php 

namespace App\C;
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
      header('location: /mame/daneshjoyar/ ');
    }
}