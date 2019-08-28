<?php

use Dotenv\Dotenv;

use Core\Container;
use Core\Database\Connection;
use Core\Database\QueryBuilder;

$dotenv = new DotEnv(dirname(__DIR__));
$dotenv->load();

Container::bind('connection', (new Connection)->getConnection());

Container::bind('database', new QueryBuilder(
    Container::get('connection')
));
