<?php

declare(strict_types=1);
error_reporting(E_ALL);

require(__DIR__.'/autoload.php');
$loader = new \Autoload\Psr4AutoloaderClass;
$loader->register();
 
$loader->addNamespace('Exceptions', 'exceptions');
$loader->addNamespace('Controllers', 'controllers');
$loader->addNamespace('Models', 'models');

new \Controllers\Reply;
new \Models\webExcel;
