<?php

namespace Alveo;


class SDK
{
    private $config;

    public function __construct($params)
    {
        $this->config = new Configuration($params);
    }

    public function auth($params)
    {
        $headers = array();
        $req = Requests::get($this->getEndpoint(), $headers, $params);
    }

    private function getEndpoint()
    {
        return $this->config['endpoint'];
    }
} 