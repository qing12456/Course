<?php
//三私一公

namespace Core;
final class Single
{
    private static $db=null;

    //第一步 构造函数私有
    private function __construct()
    {
        $db=new \mysqli('127.0.0.1','root','root','train');
        $db->set_charset('utf8');
        if($db->connect_errno)
            die('连接失败'.$db->connect_error);
        else
            return $db;

    }
    //第二步 外部调用的静态方法
    static  function  getDb(){
        if(self::$db==null)
            self::$db=new self();
        else
            return self::$db;
    }

    //第三步 防止外部克隆
    private function __clone(){

    }
    
    function __destruct()
    {
        //       echo "对象被析构<br>";
        if(self::$db)
            self::$db==null;
    }

}