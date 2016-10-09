<?php

namespace Factory;

class NormalUser extends AbstractUser{
  protected $discount=1.0;
    protected $grade=1;// 1 为普通用户  2 为VIP用户   3  为内部用户

}
