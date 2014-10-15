<?php

namespace Alveo\Models;

use Requests;


class Configuration {

    private $projectId;
    private $applicationKey;
    private $stripePublishableKey;
    private $endpoint;

    public function __construct(array $params)
    {
        $this->setApplicationKey($params['application_key']);
        $this->setProjectId($params['project_id']);
        $this->setStripePublishableKey($params['stripe_publishable_key']);
        $this->setEndpoint($params['endpoint']);
    }

    /**
     * @return mixed
     */
    public function getApplicationKey()
    {
        return $this->applicationKey;
    }

    /**
     * @param mixed $applicationKey
     */
    public function setApplicationKey($applicationKey)
    {
        $this->applicationKey = $applicationKey;
    }

    /**
     * @return mixed
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param mixed $endpoint
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;
    }

    /**
     * @return mixed
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * @param mixed $projectId
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }

    /**
     * @return mixed
     */
    public function getStripePublishableKey()
    {
        return $this->stripePublishableKey;
    }

    /**
     * @param mixed $stripePublishableKey
     */
    public function setStripePublishableKey($stripePublishableKey)
    {
        $this->stripePublishableKey = $stripePublishableKey;
    }



} 