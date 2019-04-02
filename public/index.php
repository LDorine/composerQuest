<?php
require __DIR__ . '../vendor/autoload.php';

USE App\Wcs\Hello;
USE HelloWorld\SayHello;

$hello = new Hello();
echo $hello->talk().'<br>';
$world = new SayHello();
echo $world->world();