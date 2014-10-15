<?php

namespace Alveo\Models;

use Requests;

class Product {

    public function getProducts(Session $session, $endpoint)
    {
        $headers = array(
            'Project-Id' => $session->getProjectId(),
            'Application-Key' => $session->getApplicationId(),
            'Session-Id' => $session->getId(),
            'Content-Type' => 'application/json'
        );

        $request = Requests::get($endpoint . 'products', $headers);
        $data = json_decode($request->body);

        var_dump($data);
    }

} 