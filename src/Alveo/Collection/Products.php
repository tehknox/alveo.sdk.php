<?php

namespace Alveo\Collection;

use Requests;

class Products
{

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


        return $data;
    }

    public function getProductById(Session $session, $endpoint, $_id)
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