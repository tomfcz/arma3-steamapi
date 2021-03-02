# arma3-steamapi
Retrieve multiple information about an Arma 3 server easily and quickly.

## How it works?
* **Output format** : array
```
array
├─── api
│		some api informations
│
├─── infos
│		server_ip
│		server_port
│		server_name
│		server_map
│		server_players
│		server_max_players
│		server_version
│		server_password
│		server_locked
│
├─── players
│		player_name
│		player_unit
│		player_kills
└──		player_time
```

## How to use?

> PHP
```PHP
$server_ip = '';
$server_port = '';

$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL, "https://api.tomfcz.fr/request_aram3server_steam?ip=$server_ip&port=$server_port");
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($cURL);
curl_close($cURL);

$result = json_decode($result, true);
```

> JAVASCRIPT
```JS
var server_ip = '';
var server_port = '';

var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", `https://api.tomfcz.fr/request_aram3server_steam?ip=${server_ip}&port=${server_port}`, false);
xmlHttp.send();

var result = JSON.parse(xmlHttp.responseText);
```
