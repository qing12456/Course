<?php

namespace Factory;


class InnerUser extends AbstractUser{
    protected $discount=0.5;
    protected $grade=3;// 1 为普通用户  2 为VIP用户   3  为内部用户
}