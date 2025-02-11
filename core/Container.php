<?php

namespace AmrudinBalic\Core;

class Container
{
    private array $instances = [];

    protected function resolve(string $class) {
        if(!class_exists($class)) {
            throw new \Exception("Class $class not found.");
        }

        $reflection = new \ReflectionClass($class);
        $constructor = $reflection->getConstructor();

        if(is_null($constructor)) {
            $resolved = new $class;
            $this->instances[$class] = $resolved;
            return $resolved;
        }

        $parameters = $constructor->getParameters();

        $dependencies = [];

        foreach($parameters as $parameter) {
            $dependency_classname = $parameter->getClass()->name;
            $dependencies[] = $this->resolve($dependency_classname);
        }

        $resolved = $reflection->newInstanceArgs($dependencies);

        $this->instances[$class] = $resolved;

        return $reflection->newInstanceArgs($dependencies);
    }

    public function bind(string $service, callable $resolver): void {
        $this->instances[$service] = $resolver();
    }

    public function get(string $service): object {
        if(isset($this->instances[$service])) {
            return $this->instances[$service];
        }

        return $this->resolve($service);
    }

    public function insert(string $service, object $instance): void {
        $this->instances[$service] = $instance;
    }

//    public function register(string $service, object $instance): void
//    {
//        $this->instances[$service] = $instance;
//    }
}