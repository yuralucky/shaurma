<?php
require_once '../vendor/autoload.php';
echo 'Hello';
$obj = new \Main\ShaurmaCalculator();
$obj->add(new \Main\ShaurmaBeef());
$obj->add(new \Main\ShaurmaBeef());
$obj->add(new \Main\ShaurmaOdesskaya());
var_dump( $obj->price());