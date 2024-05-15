<?php

$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token GET_FROM_SETTINGS",
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // reponse body returned as str

return $ch;
