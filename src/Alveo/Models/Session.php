<?php

namespace Alveo\Models;

use Requests;


class Session {

    private $_id;
    private $applicationId;
    private $projectId;
    private $lastVisitId;
    private $createdAt;
    private $updatedAt;
    private $metadata = array();


    public function __construct($projectId, $applicationId)
    {
        $this->setProjectId($projectId);
        $this->setApplicationId($applicationId);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @param mixed $applicationId
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
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
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getLastVisitId()
    {
        return $this->lastVisitId;
    }

    /**
     * @param mixed $lastVisitId
     */
    public function setLastVisitId($lastVisitId)
    {
        $this->lastVisitId = $lastVisitId;
    }

    /**
     * @return array
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * @param array $metadata
     */
    public function setMetadata($metadata)
    {
        $this->metadata = $metadata;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    public function setSessionIdFromAPI()
    {
        $headers = array(
            'Project-Id' => $this->getProjectId(),
            'Application-Key' => $this->getApplicationId(),
            'Content-Type' => 'application/json'
        );

        $request = Requests::post('https://api.alveo.io/v1/sessions', $headers, '{}');
        $_id = json_decode($request->body);
        setcookie("alveo_sdk_php_id", $_id->_id, time()+360000);
        $this->setId($_id->_id);
    }

    public function updateSession($endpoint, $username, $password) {
        if (isset($_COOKIE['alveo_sdk_php_id'])) {
            $this->setId($_COOKIE['alveo_sdk_php_id']);
        }
        else {
            $this->setSessionIdFromAPI();
        }

        $headers = array(
            'Project-Id' => $this->getProjectId(),
            'Application-Key' => $this->getApplicationId(),
            'Session-Id' => $this->getId(),
            'Content-Type' => 'application/json'
        );

        $request = Requests::put($endpoint . 'sessions/' . $this->getId(), $headers, '{"email": "' . $username . '", "password": "' . $password . '"}');
        $data = json_decode($request->body);

        if ($data->key == 10019) {
            return 'Already Logged In';
        }
        else {
            return 'Welcome!';
        }

    }

} 