<?php
require_once(dirname(__FILE__).'/library.php');

date_default_timezone_set('Asia/Jakarta');

$curl = my_curl_get($apicoin);

$response = $curl['response'];
if ('' != $response) {
	$response = json_decode($response, true);

	foreach ($response as $data) {
		$date = date('r', $data['date']);
        $price = 'Price = IDR '.number_format($data['price'], 0, ',', '.');
        $amount = 'Amount = '.number_format($data['amount'], 8, ',', '.');
        $type = 'Type = '.$data['type'];
        $tid = 'Tid = '.$data['tid'];
	}
}
?>
