<?php

$ch = include_once "includes/init_curl.php";

$full_name = $_GET["full_name"];

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/$full_name");

$response = curl_exec($ch);

curl_close($ch);

// Converting the data into an associative array
$data = json_decode($response, true);

?>

<?php require_once "includes/header.html"; ?>

<h1>Repository</h1>
<dl>
    <dt>Name</dt>
    <dd><?= $data["name"]; ?></dd>
    <dt>Description</dt>
    <dd><?= htmlspecialchars($data["description"]); ?></dd>
</dl>

<?php require_once "includes/footer.html"; ?>