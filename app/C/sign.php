<?php

namespace App\C;

use app\M\data;

class Sign
{
    public function index()
    {
        require __DIR__  . '/../V/sign/sign.html';
    }
    public function c()
    {
        $name =  htmlspecialchars($_POST['name']);
        $pass =   htmlspecialchars($_POST['password']);
        $r  = new data();
      
      echo ($r->serech('user', 'user', $name) && $r->serech('user', 'password', $pass)) ? header('location: /mame/daneshjoyar/categories'):  header('location: mame/daneshjoyar/signup    ');
    }
}
