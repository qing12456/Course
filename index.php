<?php

//psr-0
//1.命名空间必须和绝对路径一致
//2.类名的首字母必须大写
//3.所有的类名必须载入，不能include或者request
//4.
header("Content-type:text/html;charset=utf-8");

//git@github.com:scut2016/Course.git

define('APP',__DIR__);
include "Core/Loader.php";
spl_autoload_register('\Core\Loader::autoload');


/**
 * [dd 格式化var_dump]
 * @param  [mixed] $var [description]
 * @return [null]       [description]
 */
function dd($var)
{
    $arr=debug_backtrace();
    echo "<div style='border:1px dotted black;'>";
    if($arr)
    {
        echo "文件名：".$arr[0]['file']."<br>";
        echo "文件行号:".$arr[0]['line']."<br>";
    }
    echo "</div>";
    if(is_array($var)||is_object($var))
    {
        echo "<pre><div style='border:1px solid black;color:red'>-----------调试信息开始---------<br>";
        print_r($var);
        echo "-----------调试信息结束---------</div></pre>";
    }
    else
    {
        echo "<pre><div style='border:1px solid black;color:black'>-----------调试信息开始---------<br>";
        var_dump($var);
        echo "-----------调试信息结束---------</div></pre>";
    }
}



//$db=Core\Single::getDb();
//
////工厂模式
//$user=Factory\UserFactory::createUser('zhangsan',2);
////var_dump($user);
//
//
////注册树
//$db=\Core\Factory::createDb();
//$db2=\Core\Register::get('mysql');
//$db1=\Core\Register::get('mysql');
////echo "<pre>";
////var_dump($db1);
////echo "</pre>";
//

//策略模式
//class Cate{
//    protected $_strategy=null;
//    function index(){
//        $this->_strategy->showAd();
//        $this->_strategy->showCategory();
//    }
//    function setStrategy(\Core\IUserStrategy $strategy){
//        $this->_strategy=$strategy;
//    }
//}
////$c=new Cate;
////if($_GET['female']){
////    echo "female<br>";
////    $strategy=new \Core\FemaleStrategy();
////}
////elseif ($_GET['male']){
////    echo "Male<br>";
////    $strategy=new \Core\MaleStrategy();
////}
////$c->setStrategy($strategy);
////$c->index();
//
//
//
//
////观察者模式
//class Event extends \Observe\EventGenertor{
//    function trigger(){
//        $this->notify();
//    }
//}
//class Observer1 implements \Observe\IObserve{
//    function update($event = null)
//    {
//        echo "get money<br>";
//    }
//}
//class Observer2 implements \Observe\IObserve{
//    function update($event = null)
//    {
//        echo "get water<br>";
//    }
//}
//class Observer3 implements \Observe\IObserve{
//    function update($event = null)
//    {
//        echo "get food<br>";
//    }
//}
//$e=new Event();
//$e->addObserver(new Observer1());
//$e->addObserver(new Observer2());
//$e->addObserver(new Observer3());
////$e->trigger();
//
//
//
//
////装饰者模式
//// beverage 饮料
////   coffee 咖啡
////   Condiment 调味料
////           milk  牛奶      Sugar 糖   Butter 黄油
//$coffee=new \Decorator\Coffee();
//$milk=new\Decorator\Milk();
//$sugar=new \Decorator\Sugar();
//$butter=new \Decorator\Butter();
//
//$coffee->addDecorator($milk); 
//$coffee->addDecorator($sugar);
////echo '<br>'.$coffee->coffeeName().$coffee->total().'<br>';
//
//
////数据映射模式
//$student=\Core\Factory::getStudent(2);
//$student->stu_name='赵敏';
//$student->save();
//
//$student=\Core\Register::get(2);
//echo $student->stu_name;
//


//适配器模式




//
//$config=\Core\Factory::createDb('slave');




//迭代器模式
//$all=new \Core\AllStudent();
//foreach ($all as $key=>$student){
//    dd($student->stu_name);
//    if($key==1){
//        $student->stu_name='张翠山';
//        $student->save();
//    }
//}


//代理模式
$proxy=new \Core\Proxy();
$t=$proxy->getStudentName(2);
$proxy->setStudentName(2,"赵敏");



