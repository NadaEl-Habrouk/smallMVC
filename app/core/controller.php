<?php
namespace MVC\core;

use Dcblogdev\PdoWrapper\Database;

class controller{
    public function view($path,$pram){
        extract($pram);
        //echo VIEW.$path.'.php' ;die;
        require_once(VIEWS.$path.'.php');
    }
}
