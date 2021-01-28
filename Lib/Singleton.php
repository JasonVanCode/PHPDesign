<?php
namespace Lib;
//单例模式的设计
trait Singleton{

    private static $instance;

    public static function getInstance()
    {
        if(!self::$instance){
            self::$instance = new self;
        }
        return self::$instance;
    }

}