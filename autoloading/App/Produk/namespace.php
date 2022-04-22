<?php namespace App\Produk;

spl_autoload_register(function($class){
    //App\Produk\User = ["APP", "Produk", "User"]
    $class = explode ('\\', $class);

    require_once __DIR__. '/Produk/'. $class.'.php';
});
spl_autoload_register(function($class){
    $class = explode ('\\', $class);
    $class = end($class);

    require_once __DIR__.'/Service/'.$class. '.php';
});




