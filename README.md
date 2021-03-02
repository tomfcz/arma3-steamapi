# arma3-steamapi
Retrieve multiple information about an Arma 3 server easily and quickly.

## How to use?
```PHP
<?php
	$server_ip = '';
	$server_port = '';

	$cURL = curl_init();
	curl_setopt($cURL, CURLOPT_URL, "https://api.tomfcz.fr/request_aram3server_steam?ip=$server_ip&port=$server_port");
	$result = curl_exec($cURL);
	curl_close($cURL);

	$result = json_decode($result);

	print_r($result);

?>
```