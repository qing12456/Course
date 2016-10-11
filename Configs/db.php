<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/11
 * Time: 11:17
 */
header("Content-type:text/html;charset=utf-8");
$config=[
    'master'=>[
        'type'=>'mysql',
        'hostname'=>'localhost',
        'username'=>'root',
        'password'=>'root',
        'dbName'=>'train',
        'charset'=>'utf8',
    ],
    'slave'=>[
        'cai'=>[
            'type'=>'mysql',
            'hostname'=>'192.168.1.63',
            'username'=>'root',
            'password'=>'root',
            'dbName'=>'train',
            'charset'=>'utf8',
        ],
        'slave2'=>[
            'type'      =>  'mysql',
            'hostname'  =>  '127.0.0.1',
            'username'  =>  'root',
            'password'  =>  'root',
            'dbName'    =>  'train',
            'charset'   =>  'utf8',
        ],
    ],
];
return $config;