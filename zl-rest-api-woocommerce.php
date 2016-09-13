<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://wptest.zluck.in',
   	'ck_5663f26f99cff2abcc6ff77da58bbb81cdefb04e',
    'cs_c0256aeb89c1887eb7d3d907e17cfa0d40bd83dd',
    [
        'wp_api' => true,
        'version' => 'wc/v1',
        'verify_ssl' => false
    ]
);


$results = $woocommerce->get('products/60');

echo '<pre>';
print_r( $results );
echo '</pre>';
//die;



use Automattic\WooCommerce\HttpClient\HttpClientException;

try {
    // Array of response results.
    $results = $woocommerce->get('customers');
    // Example: ['customers' => [[ 'id' => 8, 'created_at' => '2015-05-06T17:43:51Z', 'email' => ...

echo '<pre>';
print_r( $results );
echo '</pre>';
//die;

    // Last request data.
    $lastRequest = $woocommerce->http->getRequest();

echo '<pre>';
print_r( $lastRequest );
echo '</pre>';
//die;



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

    echo '<pre>';
    print_r( $e );
    echo '</pre>';
    //die;

    $e->getMessage(); // Error message.
    $e->getRequest(); // Last request data.
    $e->getResponse(); // Last response data.
}


// global $woocommerce;

// print_r($woocommerce->get('products', ['_jsonp' => 'products'])); 


/**
 * @param bool $a
 * @param null $b
 * @return bool
 */
function abc( $a = true, $b = null ) {

    return $a;
}


?>