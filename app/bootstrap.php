<?php

/** Boots up the application and all its services... */

/** Directory of the application that other refers to... */

use AmrudinBalic\Core\App;

const ROOT_DIR = __DIR__ . '/..';

$path = new AmrudinBalic\Core\Essentials\Path(ROOT_DIR);

$app_config = require $path->config('app');

$app = App::instance(ROOT_DIR);



