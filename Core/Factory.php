<?php


namespace Core;

use DataMap\Student;
class Factory
{
    static function createDb(){
        $db=MySQLi::getDb();
        Register::set('mysql',$db);
        return $db;
    }
    static function getStudent($id){
        $student=Register::get($id);
        if(!$student){
            $student=new Student($id);
            Register::set($id,$student);
        }
        return $student;
    }
}