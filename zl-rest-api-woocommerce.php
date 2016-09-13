<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http',
   	'ck_',
    'cs_',
    [
        'wp_api' => true,
        'version' => 'wc/v1',
        'verify_ssl' => false
    ]
);


$results = $woocommerce->get('products/60');


use Automattic\WooCommerce\HttpClient\HttpClientException;

try {
    // Array of response results.
    $results = $woocommerce->get('customers');
    // Example: ['customers' => [[ 'id' => 8, 'created_at' => '2015-05-06T17:43:51Z', 'email' => ...

    // Last request data.
    $lastRequest = $woocommerce->http->getRequest();

    $lastRequest->getUrl(); // Requested URL (string).
    $lastRequest->getMethod(); // Request method (string).
    $lastRequest->getParameters(); // Request parameters (array).
    $lastRequest->getHeaders(); // Request headers (array).
    $lastRequest->getBody(); // Request body (JSON).

    // Last response data.
    $lastResponse = $woocommerce->http->getResponse();
    $lastResponse->getCode(); // Response code (int).
    $lastResponse->getHeaders(); // Response headers (array).
    $lastResponse->getBody(); // Response body (JSON).

} catch (HttpClientException $e) {

    $e->getMessage(); // Error message.
    $e->getRequest(); // Last request data.
    $e->getResponse(); // Last response data.
}


// global $woocommerce;

// print_r($woocommerce->get('products', ['_jsonp' => 'products'])); 


?>