<?php
use App\Controllers\Index;
use Lib\Chain;
use Lib\Factory;
use Lib\TreeRegister;
use Lib\AdapterPattern\Mysqli;
use Lib\AdapterPattern\PDO;
use Lib\AdapterPattern\Oracle;

use Lib\Strategy\ExecuteStrategy;
use Lib\Strategy\A;
use Lib\Strategy\B;
use Lib\Strategy\C;



define('ROOT',__DIR__);
require_once './autoloader.php';
//注册自动加载类
autoloader::register();

echo '-------------------php 链式模式-----------------------'.PHP_EOL;
$chain = new Chain();
$chain->where()->limit()->get();

echo '-------------------php 工厂模式-----------------------'.PHP_EOL;
$man = Factory::createFactory('man');
$man->index();
$women = Factory::createFactory('women');
$women->index();

echo '-------------------php 注册树模式-----------------------'.PHP_EOL;
$index = new Index();
TreeRegister::add('index',$index);
TreeRegister::get('index')->index();

echo '-------------------php 适配器模式-----------------------'.PHP_EOL;
$mysqli = new Mysqli;
$pdo = new PDO;
$oracle = new Oracle;
$mysqli->connect();
$pdo->connect();
$oracle->connect();

echo '-------------------php 策略模式-----------------------'.PHP_EOL;
$a = new ExecuteStrategy(new A);
$a->action();

$b = new ExecuteStrategy(new B);
$b->action();

$c = new ExecuteStrategy(new C);
$c->action();


