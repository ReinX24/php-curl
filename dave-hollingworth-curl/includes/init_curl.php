<?php

$headers = [
    "User-Agent: Example REST API Client",
    "Authorization: token GET_FROM_GITHUB",
];

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_RETURNTRANSFER => true
]);

// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // reponse body returned as str

return $ch;
