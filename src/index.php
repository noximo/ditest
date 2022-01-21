<?php

use App\Test;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;
require '../vendor/autoload.php';

$cb = new ContainerBuilder();
$loader = new PhpFileLoader($cb, new FileLocator('../config'));
$loader->load('services.php');

$id = Test::class;

echo $cb->has($id) ? 'Y' : 'N';
echo PHP_EOL;

dump($cb);

$c = $cb->get($id);

assert($c instanceof Test);

$c->go();
