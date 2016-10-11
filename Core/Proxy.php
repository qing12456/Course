<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/11
 * Time: 14:27
 */
//header("Content-type:text/html;charset=utf-8");

namespace Core;


class Proxy implements IStudentProxy{
    function getStudentName($id){
        $db=Factory::createDb('slave');
        $res=$db->query("select stu_name from student wherer id=$id");
        return $res->fetch_assoc();
    }
    
    function setStudentName($id,$name){
        $db=Factory::createDb();
        $sql="update student set stu_name='{$name}' where id=$id";
        $res=$db->query($sql);
    }
}
