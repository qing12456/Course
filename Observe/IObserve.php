<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 10:31
 */
//header("Content-type:text/html;charset=utf-8");

namespace Observe;
interface IObserve{
    function update($event=null);
}