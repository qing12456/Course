<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 13:38
 */
//header("Content-type:text/html;charset=utf-8");

namespace Decorator;


class Milk implements ICondiment
{
    function cost()
    {
        return 15;
    }
    function name(){
        return "Milk~";
    }
}