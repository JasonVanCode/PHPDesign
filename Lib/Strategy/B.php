<?php
namespace Lib\Strategy;
use Lib\Strategy\StrategyInterface;

//策略B
class B implements StrategyInterface{

    public function useStrategy(){

        echo __CLASS__.'----'.__FUNCTION__.PHP_EOL;


    }


}