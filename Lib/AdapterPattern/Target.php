<?php
namespace Lib\AdapterPattern;

interface Target{

    public function connect();

    public function query();

    public function close();

}
