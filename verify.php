<?php
$access_token = 'ig2PfZNseo+Dnhy9DN4eJzgwmS9r4sjGnteybw+CMtWIeVMjNcgfAclLD71qlG657mN8oGMvu4s4pfxkA0PVaF8dgF0A+TWgZf2oTjNlgMTSRfrTyV0cdvzyG7wCHNutb9a5kyYaZ8/J7COAaby2MQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

