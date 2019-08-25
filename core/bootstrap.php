<?php

use Dotenv\Dotenv;

use Core\Container;
use Core\Database\Connection;

$dotenv = new DotEnv(dirname(__DIR__));
$dotenv->load();

Container::bind('database', (new Connection)->getConnection());