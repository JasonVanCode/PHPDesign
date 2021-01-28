<?php
namespace Lib\Strategy;
use Lib\Strategy\StrategyInterface;

//策略A
class A implements StrategyInterface{

    public function useStrategy(){

        echo __CLASS__.'----'.__FUNCTION__.PHP_EOL;
        

    }


}