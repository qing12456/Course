<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 13:10
 */
//header("Content-type:text/html;charset=utf-8");

namespace Decorator;


class Coffee extends Beverage
{
    protected $_condiment=[];
    public function  __construct()
    {
        $this->_name='Coffee';
    }
//纯咖啡的价格
    function cost()
    {
       return 20;
    }

    public function addDecorator(ICondiment $condiment){
        $this->_condiment[]=$condiment;
    }
    
    //计算总的价格
    public function total(){
        $cost=0;
        if(is_array($this->_condiment)){
            foreach ($this->_condiment as $condiment)
                $cost+=$condiment->cost();
        }
        return $cost+$this->cost();
    }
    //获取咖啡名
    public function coffeeName(){
        $name='';
        if(is_array($this->_condiment)){
            foreach ($this->_condiment as $condiment) {
                $name.=$condiment->name();
            }
        }
        return $name.'Coffee';
    }
}