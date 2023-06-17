<?php
chdir(realpath(dirname(__FILE__)));
require '../vendor/autoload.php';
use Revolt\EventLoop;

use function Amp\File\exists;

$fileName = realpath(__FILE__);
print("checking if $fileName exists...");
$result = exists($fileName)?'it exists':'it doesn\'t exist';
print($result);


EventLoop::run();