<?php

use Nette\DI\Container;
use Nextras\Dbal\Connection;
use Nextras\Migrations\Bridges;
use Nextras\Migrations\Bridges\NextrasDbal\NextrasAdapter;
use Nextras\Migrations\Controllers\ConsoleController;
use Nextras\Migrations\Controllers\HttpController;
use Nextras\Migrations\Drivers\MySqlDriver;
use Nextras\Migrations\Extensions\SqlHandler;

require __DIR__ . '/../vendor/autoload.php';


/** @var Container $container */
$container = require_once __DIR__ . '/../app/bootstrap.php';

/** @var Connection $connection */
$connection = $container->getByType(Connection::class);
$dbal = new NextrasAdapter($connection);
$driver = new MySqlDriver($dbal);

$baseDir = __DIR__;
$controller = new HttpController($driver);
$controller->addGroup('structures', "$baseDir/structures");
$controller->addGroup('basic-data', "$baseDir/basic-data", ['structures']);
$controller->addExtension('sql', new SqlHandler($driver));

$controller->run();