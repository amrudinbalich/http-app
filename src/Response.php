<?php

namespace AmrudinBalic\Http;

class Response
{
    private $body;
    private $headers = [];

    public function __construct($body = '')
    {
        $this->body = $body;
    }

    public function header($name, $value)
    {
        $this->headers[$name] = $value;
    }

    public function json($body = '')
    {
        $this->header('Content-Type', 'application/json');

        if(!$this->body) {
            $this->body = json_encode($body);
        }
    }

    public function send()
    {
        foreach($this->headers as $name => $value) {
            header($name . ': ' . $value);
        }

        echo $this->body;
    }
}