<?php

$access_token = 'iGhTyWxuyxSNEL6HcTbWlaIXV40UTH3UnrlukXIIUhPv53sVQ+IDa5jHW2qks+HU241kbMGXshljvfB+wGKn0i4uNPIT/lKTgjwshElusvCgHCj9dYN3Dhon+3bUePz9JHziwVxfPmuhn0n/ypBMNwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v2/oauth/accessToken';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

 ?>
