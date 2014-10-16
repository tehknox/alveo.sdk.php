<?php

namespace Alveo\Collection;

use Requests;
use Alveo;

class Products
{

    public function getProducts(Alveo\Models\Session $session, $endpoint)
    {
        $headers = array(
            'Project-Id' => $session->getProjectId(),
            'Application-Key' => $session->getApplicationId(),
            'Session-Id' => $session->getId(),
            'Content-Type' => 'application/json'
        );

        $request = Requests::get($endpoint . 'products', $headers);
        $data = json_decode($request->body);

        return $data;
    }

    public function getProductById(Alveo\Models\Session $session, $endpoint, $_id)
    {
        $headers = array(
            'Project-Id' => $session->getProjectId(),
            'Application-Key' => $session->getApplicationId(),
            'Session-Id' => $session->getId(),
            'Content-Type' => 'application/json'
        );

        $request = Requests::get($endpoint . 'products/' . $_id, $headers);
        $data = json_decode($request->body);
    }

} 