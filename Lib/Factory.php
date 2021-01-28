<?php
namespace Lib;
use Lib\Man;
use Lib\Women;

class Factory{

    public static function createFactory($name){

        switch ($name) {
            case 'man':
                return new Man();
                break;
            case 'women':
                return new Women();
                break;
        }

    }

}

