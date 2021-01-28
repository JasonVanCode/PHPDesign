<?php
namespace Lib\Strategy;
use Lib\Strategy\StrategyInterface;

//策略C
class C implements StrategyInterface{

    public function useStrategy(){
        echo __CLASS__.'----'.__FUNCTION__.PHP_EOL;

    }


}