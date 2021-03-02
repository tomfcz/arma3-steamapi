var server_ip = '';
var server_port = '';

var xmlHttp = new XMLHttpRequest();
xmlHttp.open("GET", `https://api.tomfcz.fr/request_aram3server_steam?ip=${server_ip}&port=${server_port}`, false);
xmlHttp.send();

var result = JSON.parse(xmlHttp.responseText);

console.log(result);
