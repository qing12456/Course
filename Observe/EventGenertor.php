<?php
/**
 * Created by PhpStorm.
 * User: HY
 * Date: 2016/10/10
 * Time: 10:32
 */
//header("Content-type:text/html;charset=utf-8");

namespace Observe;

class EventGenertor
{

    private $_observers=[];
    function addObserver(IObserve $observe){
        $this->_observers[]=$observe;
    }
    function notify(){
        foreach($this->_observers as $observer){
            $observer->update();
        }
    }
}