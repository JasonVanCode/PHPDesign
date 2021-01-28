<?php
//php 链式操作模式
namespace Lib;
class Chain{

     public function __construct()
     {
         
     }


     public function where(){

        return $this;
     }

     public function limit(){

        return $this;
     }

     public function get()
     {
        echo '获取最终的数据'.PHP_EOL;
     }

}
