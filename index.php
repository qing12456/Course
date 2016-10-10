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

//工厂模式
$user=Factory\UserFactory::createUser('zhangsan',2);
var_dump($user);


//注册树
$db=\Core\Factory::createDb();
$db2=\Core\Register::get('mysql');
$db1=\Core\Register::get('mysql');
//echo "<pre>";
//var_dump($db1);
//echo "</pre>";


//策略模式
class Cate{
    protected $_strategy=null;
    function index(){
        $this->_strategy->showAd();
        $this->_strategy->showCategory();
    }
    function setStrategy(\Core\IUserStrategy $strategy){
        $this->_strategy=$strategy;
    }
}
$c=new Cate;
if($_GET['female']){
    echo "female<br>";
    $strategy=new \Core\FemaleStrategy();
}
elseif ($_GET['male']){
    echo "Male<br>";
    $strategy=new \Core\MaleStrategy();
}
//$c->setStrategy($strategy);
//$c->index();



//观察者模式
class Event extends \Observe\EventGenertor{
    function trigger(){
        $this->notify();
    }
}
class Observer1 implements \Observe\IObserve{
    function update($event = null)
    {
        echo "get money<br>";
    }
}
class Observer2 implements \Observe\IObserve{
    function update($event = null)
    {
        echo "get water<br>";
    }
}
class Observer3 implements \Observe\IObserve{
    function update($event = null)
    {
        echo "get food<br>";
    }
}
$e=new Event();
$e->addObserver(new Observer1());
$e->addObserver(new Observer2());
$e->addObserver(new Observer3());
$e->trigger();



