<?php

namespace Alveo;


class SDK
{
    private $config;

    public function __construct($params)
    {
        $this->config = new Configuration($params);
    }
} 