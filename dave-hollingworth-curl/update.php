<?php

$ch = include_once "includes/init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/" . $_POST["full_name"]);

// Get the POST data, also automatically sets request to POST
// In this example, we set the request to PATCH
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST));

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

curl_close($ch);

$data = json_decode($response, true);

if ($status_code == 422) {
    echo "Invalid data: ";
    print_r($data["errors"]);
    exit;
}

// Success code for update is 200
if ($status_code !== 200) {
    echo "Unexpected status code: ";
    var_dump($data);
    exit;
}

?>

<?php require_once "includes/header.html"; ?>

<h1>Edit Repository</h1>

<p>Respository updated successfully.
    <a href="show.php?full_name=<?= $data["full_name"]; ?>">Show</a>
</p>

<?php require_once "includes/footer.html"; ?>