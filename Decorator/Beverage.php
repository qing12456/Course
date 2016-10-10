<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 13:10
 */
//header("Content-type:text/html;charset=utf-8");

namespace Decorator;

abstract class Beverage 
{
    public $_name;//商品名称
    abstract public function cost();//商品价格
}