<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 10:08
 */
//header("Content-type:text/html;charset=utf-8");

namespace Core;


class FemaleStrategy implements IUserStrategy
{
    function showAd(){
        echo "女士服装<br>";
    }
    function showCategory(){
        echo "女士服装分类<br>";
    }
}