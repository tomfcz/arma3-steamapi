<?php
  $server_ip = '';
  $server_port = '';
  $token = '';

  $cURL = curl_init();
  curl_setopt($cURL, CURLOPT_URL, "https://api.tomfcz.fr/request_aram3server_steam?ip=$server_ip&port=$server_port&token=$token");
  curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($cURL);
  curl_close($cURL);

  $result = json_decode($result, true);

  print_r($result);
?>
