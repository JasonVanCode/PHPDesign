<?php
namespace Lib\Strategy;

use Lib\Strategy\StrategyInterface;

class ExecuteStrategy{

    private $strategy;

    public function __construct(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function action()
    {
        $this->strategy->useStrategy();
    }

}