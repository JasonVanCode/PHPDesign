<?php
namespace Lib;
//注册树模式
class TreeRegister{

    public static $objects = [];

    public static function add($key,$value){
        
        self::$objects[$key] = $value;
    }
    
    public static function get($key)
    {
        if(!isset(self::$objects[$key])){
            return 'fail';
        }
        return self::$objects[$key];
    }

    public static function _unset($key)
    {
        unset(self::$objects[$key]);
    }

}