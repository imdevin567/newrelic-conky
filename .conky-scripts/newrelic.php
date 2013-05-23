<?php

// Set these values to match your New Relic account
$apikey = 'NEWRELIC_API_KEY';
$accountid = 'NEWRELIC_ACCOUNT_ID';
$applicationid = 'NEWRELIC_APPLICATION_ID';


$curl = curl_init();

curl_setopt_array($curl, array(
	CURLOPT_RETURNTRANSFER => 1,
	CURLOPT_URL => 'https://api.newrelic.com/api/v1/accounts/' . $accountid . '/applications/' . $applicationid . '/threshold_values.xml',
	CURLOPT_USERAGENT => 'Conky update',
	CURLOPT_HTTPHEADER => array('x-api-key:' . $apikey)
));

$resp = curl_exec($curl);
$xml = new SimpleXMLElement($resp);

for ($i=0; $i<=8; $i++) :
	echo $xml->threshold_value[$i]['name'] . ': ' . $xml->threshold_value[$i]['formatted_metric_value'] . "\n";
endfor;

curl_close($curl);

?>
