<?php
namespace Core;
class Loader
{
    static function autoload($class){
        $path=APP."/".$class.'.php';
        $path=str_replace('\\','/',$path);
        include ($path);
    }
}