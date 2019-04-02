<?php
require __DIR__ . '/vendor/autoload.php';

USE App\Wcs;
USE HelloWorld;

$hello = new Hello();
echo $hello->talk().'<br>';
$world = new SayHello();
echo $world->world();