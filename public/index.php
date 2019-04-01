<?php
require __DIR__ . '/vendor/autoload.php';

$hello = new App\Wcs\Hello();
echo $hello->talk();
echo $world = new HelloWorld\SayHello();
echo $world->world();