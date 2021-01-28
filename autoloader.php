<?php
class autoloader{

    public static function register(){
        
        spl_autoload_register("self::register_class");
    }

    public static function register_class($class){
        $class = str_replace('\\','/',$class);
        $index = strpos( $class,'/');
        if($index != 0){
            $class = '/'.$class;
        }
        require_once ROOT.$class.'.php';
    }

}