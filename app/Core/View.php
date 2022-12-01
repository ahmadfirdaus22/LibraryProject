<?php

namespace OOP\app\Core;


class View
{
    public static function render(string $view, $data)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/template/navbar.php';
        require __DIR__.'/../View/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }

    public static function render2(string $view, $data1, $data2)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/template/navbar.php';
        require __DIR__.'/../View/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }
    
    public static function render3(string $view, $data1, $data2,$data3)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/template/navbar.php';
        require __DIR__.'/../View/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php';
    }



    public static function startinput(string $view)
    {
        require __DIR__.'/../View/template/header.php';
        require __DIR__.'/../View/template/navbar.php';
        require __DIR__.'/../View/'.$view.'.php';
        require __DIR__.'/../View/template/footer.php'; 
    }

    public static function adding(string $view)
    {
        require __DIR__.'/../View/header.php';
        require __DIR__.'/../View/'.$view.'.php';
        require __DIR__.'/../View/footer.php';   
    }

    public static function startediting(string $view, $data)
    {
        require __DIR__.'/../View/header.php';
        require __DIR__.'/../View/'.$view.'.php';
        require __DIR__.'/../View/footer.php'; 
    }
    public static function login(string $view)
    {
        require __DIR__.'/../View/'.$view.'.php';
    }
}