<?php
$access_token = 'TvEoXeYAzSKleC1XiM3JhWeTs5EG6/jW5CR12VhLzaizy6mkTMpgGQ4ZxG9CX5n7vM83CjInzpkM2ROCShELsy11nWIGUYUdXpo5XB9nR0cOo/NR/7/wtMtntDgaMNTFH22Z7x5+3UoF64E3mLub9AdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;