<?php 

namespace App\C;
class Signup 
{
    public function index ()
    {
        require __DIR__ . '/../V/signup/signup.html' ; 
    }
    public function c()
    {
        htmlspecialchars($_POST['name'])  ; 
        htmlspecialchars($_POST['email']) ;
        htmlspecialchars($_POST['password'])     ;

    }
}