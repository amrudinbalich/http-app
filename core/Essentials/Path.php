<?php

namespace AmrudinBalic\Core\Essentials;

/** Returns path for most essential files and services across the app. */
class Path
{
    public function __construct(private string $root) {}

    public function config(string $config): string {
        return $this->root . '/config/' . $config . '.php';
    }

    public function view(string $view): string {
        return $this->root . '/views/' . $view . '.php';
    }

    public function model(string $model): string {
        return $this->root . '/models/' . $model . '.php';
    }

    public function controller(string $controller): string {
        return $this->root . '/controllers/' . $controller . '.php';
    }

//    public function service(string $service): string {
//        return $this->root . '/services/' . $service . '.php';
//    }
}