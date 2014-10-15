<?php

namespace Alveo;

use Alveo;

class SDK
{
    private $config;
    private $session;

    public function __construct($params)
    {
        $this->config = new Alveo\Models\Configuration($params);
        $this->session = new Alveo\Models\Session($this->config->getProjectId(), $this->config->getApplicationKey());
        if (isset($_COOKIE['alveo_sdk_php_id'])) {
            $this->session->setId($_COOKIE['alveo_sdk_php_id']);
        }
        else {
            $this->session->setSessionIdFromAPI();
        }
    }

    public function auth($username, $password)
    {
        return $this->session->updateSession($this->config->getEndpoint(), $username, $password);
    }

    private function getEndpoint()
    {
        return $this->config['endpoint'];
    }

    public function getProducts()
    {
        $products = new Alveo\Models\Product();
        $products->getProducts($this->session, $this->config->getEndpoint());
    }
} 