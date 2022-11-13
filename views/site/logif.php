<?php

$ch = curl_init();
$login = '8';
$pass = '8';

curl_setopt($ch, CURLOPT_URL, 'https://portal.petrocollege.ru/home.aspx');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_NTLM | CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_UNRESTRICTED_AUTH, true);

curl_setopt($ch, CURLOPT_USERPWD, '$login:$pass');

$result = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    echo('jkl');
}
curl_close($ch);


