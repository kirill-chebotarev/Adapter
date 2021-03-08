<?php

use Adapter\CircleAdapter;
use Adapter\SquareAdapter;
use Lib\CircleAreaLib;
use Lib\SquareAreaLib;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);

    require_once __DIR__.'\\'.$className.'.php';
});

$circleAdapter = new CircleAdapter(new CircleAreaLib());
echo $circleAdapter->circleArea(16);

echo '<br>';
$squareAdapter = new SquareAdapter(new SquareAreaLib());
echo $squareAdapter->squareArea(7);