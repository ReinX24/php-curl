<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true
]);

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true); // return as an associative array

echo "<pre>";
print_r($data);
echo "</pre>";
