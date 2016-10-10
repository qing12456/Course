<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 10:12
 */
//header("Content-type:text/html;charset=utf-8");

namespace Core;
class MaleStrategy implements IUserStrategy
{
    function showAd()
    {
        echo "男士服装<br>";
    }

    function showCategory()
    {
        echo "男士服装分类<br>";
    }

}