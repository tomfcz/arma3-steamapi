# arma3-steamapi
Retrieve multiple information about an Arma 3 server easily and quickly.

## How it works?
* **Requirements** : you must have a token to use the api, to get one please contact me on discord in dm (tomfcz # 8626)
* **Output format** : json array
```
(array)
├─── api
│	author (string)
│	url (string)
│	version (string)
│	response (bool) : false = error / true = correct response
│	message (string)
│	account (array) : some account informations
│
├─── infos
│	server_ip (string)
│	server_port (string)
│	server_name (string)
│	server_map (string)
│	server_players (int)
│	server_max_players (int)
│	server_version (string)
│	server_password (bool) : false = no password / true = password
│	server_locked (bool) : false = unlock / true = lock
│
├─── players
│	player_name (string)
│	player_name_format (string)
│	player_unit (string)
│	player_kills (int)
└──	player_time (int)
```

## How to use?

> PHP
```PHP
$server_ip = '';
$server_port = '';
$token = '';

$cURL = curl_init();
curl_setopt($cURL, CURLOPT_URL, "https://api.tomfcz.fr/request_aram3server_steam?ip=$server_ip&port=$server_port&token=$token");
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($cURL);
curl_close($cURL);

$result = json_decode($result, true);
```


> JAVASCRIPT
```JS
var server_ip = '';
var server_port = '';
var token = '';

var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", `https://api.tomfcz.fr/request_aram3server_steam?ip=${server_ip}&port=${server_port}&token=${token}`, false);
xmlHttp.send();

var result = JSON.parse(xmlHttp.responseText);
```
