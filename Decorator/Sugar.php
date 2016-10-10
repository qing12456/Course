<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 13:40
 */
//header("Content-type:text/html;charset=utf-8");

namespace Decorator;


class Sugar implements ICondiment
{
    function cost()
    {
        return 3;
    }
    function name()
    {
       return "Sugar~";
    }
}