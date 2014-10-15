<?php
/**
 * Created by PhpStorm.
 * User: Frédérick
 * Date: 10/14/2014
 * Time: 9:48 PM
 */

require_once __DIR__.'/vendor/autoload.php';

$configuration = array(
    'application_key' => '543c20faef2c0800070fba65',
    'project_id' => '5435531ae951e8000723dd18',
    'stripe_publishable_key' => 'pk_test_1qwMpL2s3XdaHSeNrxpE9qcF',
    'endpoint' => 'https://api.alveo.io/v1/'
);
$AlveoSDK = new Alveo\SDK($configuration);
echo $AlveoSDK->auth('frederick.lebel@gmail.com', 'cacacaca');