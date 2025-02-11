<?php

use AmrudinBalic\Core\App;
use AmrudinBalic\Core\Essentials\Path;

function app(string $service = ''): App {
//    if(!$service) {
        return App::instance();
//    } else {
//        return App::instance()->get($service);
//    }
}

/**
 * Gets Path service from the app.
 *
 * @param string $component Component of the app, eg. 'config', 'view', 'model', 'controller'
 * @return Path
 */
function path(string $component = ''): Path {
//    if(!$component) {
        return app()->get('path');
//    } else {
//        return app()->get('path')->$component();
//    }
}