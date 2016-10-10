<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 13:11
 */
//header("Content-type:text/html;charset=utf-8");

namespace Decorator;

interface ICondiment
{
    function cost();
    function name();
}