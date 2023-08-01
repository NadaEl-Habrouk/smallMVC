<?php
namespace MVC\core;

class helpers{
    public static function redirect($path){
        header("location: DOMAIN_NAME".$path);
    }
}