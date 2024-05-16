<?php

$ch = include_once "includes/init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/" . $_POST["full_name"]);

// Get the POST data, also automatically sets request to POST
// In this example, we set the request to DELETE
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

// TODO: fix delete function
// No need to send json data to delete a repo
// curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($_POST));

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);

curl_close($ch);

$data = json_decode($response, true);

// Success code for delete is 204
if ($status_code !== 204) {
    echo "Unexpected status code: ";
    var_dump($data);
    exit;
}

?>

<?php require_once "includes/header.html"; ?>

<h1>Delete Repository</h1>

<p>Respository deleted successfully.
    <a href="index.php">Index</a>
</p>

<?php require_once "includes/footer.html"; ?>