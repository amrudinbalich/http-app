<?php

namespace AmrudinBalic\Http;

class Kernel
{
    public function handle(Request $request): Response {
        // put middlewares

        // request details...

        // router hit ( get details of the request, resolve the controller dependencies )

        // custom request ( validation )

        // router->handle() || get response

        // return response

        $uri = $request->uri();
        $method = $request->method();



    }
}


class Router {
    private $routes = [];
    public function dispatch($uri, $method) {
        $route = $this->routes[$uri];

        if(!isset($route)) {
            return view();
        } else {
            $route->handle();
        }
    }
}

class View {
    public function __construct(string $view = '') {
        // body = require views/$view.php ...
        // set body... $this->body()
        // then return View class...
        // Kernel => $response ( View < Response )
        // Kernel -> returns instanceof Response...
        // $response->send() ( Response::send() )
        // the end of the app HTTP Req/Res Lifecycle...
    }
}