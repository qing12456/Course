<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 10:10
 */
//header("Content-type:text/html;charset=utf-8");

namespace Core;


interface IUserStrategy
{
    function showAd();
    function showCategory();
}

interface IStudentProxy{
    function getStudentName($id);
    function setStudentName($id,$name);
}