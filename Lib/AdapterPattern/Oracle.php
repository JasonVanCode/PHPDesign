<?php
namespace Lib\AdapterPattern;

use Lib\AdapterPattern\Target;

class Oracle implements Target{

    

    public function connect()
    {
        echo __CLASS__.'----'.__FUNCTION__.PHP_EOL;
        
    }

    public function query(){


    }

    public function close()
    {
        
    }

}
