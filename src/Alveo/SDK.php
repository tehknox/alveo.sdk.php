<?php

namespace Alveo;

use Alveo;

class SDK
{
    private $config;
    private $session;
    private $cart;

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
        $this->session->updateSession($this->config->getEndpoint(), $username, $password);
        $this->cart = new Alveo\Models\Cart($this->session, $_COOKIE['alveo_customer_id'], $this->config->getEndpoint());
    }

    public function getProducts()
    {
        $products = new Alveo\Collection\Products();
        $productList = $products->getProducts($this->session, $this->config->getEndpoint());
        $tempProduct = array();
        foreach ($productList as $product) {
            $tempProduct[] = new Alveo\Models\Product($product->_id, $product->created_at, $product->image, $product->is_online, $product->is_salable, $product->is_taxable, $product->metadata, $product->name, $product->options, $product->sku, $product->price, $product->updated_at);
        }

        return $tempProduct;
    }

    public function getProductById($_id)
    {
        $products = new Alveo\Models\Product();
        $products->getProductById($this->session, $this->config->getEndpoint(), $_id);
    }

    public function getCart()
    {
        return $this->cart;
    }

    private function getEndpoint()
    {
        return $this->config['endpoint'];
    }
} 