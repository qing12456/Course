<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 13:41
 */
//header("Content-type:text/html;charset=utf-8");

namespace Decorator;


class Butter implements ICondiment
{
    function cost()
    {
       return 8;
    }
    function name()
    {
        return "Butter~";
    }
}