<?php


namespace Core;


class Factory
{
    static function createDb(){
        $db=MySQLi::getDb();
        Register::set('mysql',$db);
        return $db;
        
        
    }
}