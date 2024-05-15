<?php

$ch = include_once "includes/init_curl.php";

$full_name = $_GET["full_name"];

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/$full_name");

$response = curl_exec($ch);

curl_close($ch);

// Converting the data into an associative array
$data = json_decode($response, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReinX24 Github Repositories</title>
    <link rel="stylesheet" href="css/pico.min.css" />
</head>

<body>

    <main>
        <h1>Repository</h1>
        <dl>
            <dt>Name</dt>
            <dd><?= $data["name"]; ?></dd>
            <dt>Description</dt>
            <dd><?= htmlspecialchars($data["description"]); ?></dd>
        </dl>
    </main>
</body>

</html>