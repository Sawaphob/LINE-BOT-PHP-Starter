<?php
$access_token = 'Z6vjyXr4kSBDbsgkrt6x11Y0jT5wptm2PTNtqOm4z/BXst7NM2LRjoVsHs/PmCJsvM83CjInzpkM2ROCShELsy11nWIGUYUdXpo5XB9nR0fcpcORy6jcXMKQ8swLjtXWicsj8JlJBQxkO2OwJ+k3UQdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;