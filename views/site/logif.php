<?php
$log = '10190190';
$pass= 'ee5WKvbmmNkS';
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://portal.petrocollege.ru/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM);
curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, true);

curl_setopt($ch, CURLOPT_USERPWD, ($log . ':' . $pass));

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} elseif ($result == "") {
    echo "No ok";
} else {
    echo "ok";
}
curl_close($ch);


