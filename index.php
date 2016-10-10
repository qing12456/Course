<?php

//psr-0
//1.命名空间必须和绝对路径一致
//2.类名的首字母必须大写
//3.所有的类名必须载入，不能include或者request
//4.


define('APP',__DIR__);
include "Core/Loader.php";
spl_autoload_register('\Core\Loader::autoload');

//$db=Core\Single::getDb();


//$user=Factory\UserFactory::createUser('zhangsan',2);
//var_dump($user);

$user=Factory\UserFactory::createUser('zhansan',2);
$db=\Core\Factory::createDb();
$db2=\Core\Register::get('mysql');
$db1=\Core\Register::get('mysql');
echo "<pre>";
var_dump($db1);
echo "</pre>";

