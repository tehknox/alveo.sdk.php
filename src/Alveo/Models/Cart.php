<?php

namespace Alveo\Models;

use Alveo;
use Requests;


class Cart {

    public function __construct(Session $session, $customerId, $endpoint)
    {
        $headers = array(
            'Project-Id' => $session->getProjectId(),
            'Application-Key' => $session->getApplicationId(),
            'Session-Id' => $session->getId(),
            'Content-Type' => 'application/json'
        );

        $request = Requests::get($endpoint . 'customer/' . $customerId . '/carts', $headers);
        $data = json_decode($request->body);
        return $data;
    }

} 