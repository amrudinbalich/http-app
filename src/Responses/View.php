<?php

namespace AmrudinBalic\Http\Responses;

use AmrudinBalic\Http\Response;

class View extends Response
{
    public function __construct($view, $data = [])
    {
        // body = views/$view.php -- but this will be in-built not found view...
        // get view
        $this->body =
    }
}