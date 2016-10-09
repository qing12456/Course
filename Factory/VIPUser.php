<?php

namespace Factory;


class VIPUser extends AbstractUser
{

    protected $discount=0.7;
    protected $grade=2;// 1 为普通用户  2 为VIP用户   3  为内部用户
    
}