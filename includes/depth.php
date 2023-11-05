<?php

require_once(dirname(__FILE__).'/library.php');

$curl = my_curl_get($apicoin);

$response = $curl['response'];

if ('' != $response) {
	$response = json_decode($response, true);
	
	foreach ($response['buy'] as $data) {
	   $buy = "IDR ".number_format($data[0], 0, ',', '.')." : ".$data[1]."\n";
	}

	foreach ($response['sell'] as $data) {
		$sell = "IDR ".number_format($data[0], 0, ',', '.')." : ".$data[1]."\n";
	}
}

?>