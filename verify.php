<?php
$access_token = 'CdsWkJVodsaQsGRkKV8y7rFBv8VfW8BCeT2L+taq6mnAx9FjWckEyxx9uAiEf+IvvM83CjInzpkM2ROCShELsy11nWIGUYUdXpo5XB9nR0cUWNbC33dw0mxBegtVn86mK3GqdibWQ1XBfMAgcIQzvAdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;