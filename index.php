<?php

require 'vendor/autoload.php';


//$request =

$request = 'bla bla bla';


$app = new \AmrudinBalic\Core\App(__DIR__);

// HTTP Kernel
$http = new Amrudin\Foundation\Kernel\Http();

$response = $http->handle($request);
$response->send();