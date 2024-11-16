<?php 
namespace App\C; 
class Page 
{
    public function index()
    {
        require __DIR__ . '/../V/page/single.html' ; 
    }
}