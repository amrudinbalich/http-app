<?php

namespace AmrudinBalic\Core;

class App extends Container
{
    private static ?App $instance = null;

    /** @param string $root `/app` directory  */
    public function __construct(public string $root) {
        // boot an app upon its creation...
        $this->bind('path', fn() => new Essentials\Path($this->root));
        $this->bootServices();
    }

    /** Creates an app and makes sure that there is one app instance. ( singleton ) */
    public static function instance(string $root = ''): App {
        if (is_null(self::$instance)) {
            self::$instance = new self($root); // pass in the requirement upon creation
        }

        return self::$instance;
    }

    public function bootServices() {
        $config = require $this->get('path')->config('app');
    }
}