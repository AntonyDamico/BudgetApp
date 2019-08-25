<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use Core\Request;
use Core\Router;

Router::load(require 'app/routes.php')
    ->direct(Request::uri(), Request::method());
