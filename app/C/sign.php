<?php 
namespace App\C; 
class Sign 
{
    public function index()
{
    require __DIR__  . '/../V/sign/sign.html' ; 
}
public function c(){
    htmlspecialchars($_POST['email']) ; 
    htmlspecialchars($_POST['password']) ; 
    
}
}