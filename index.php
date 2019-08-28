<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use Core\Request;
use Core\Router;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

Router::load(require 'app/routes.php')
    ->direct(Request::uri(), Request::method());
