<?php

$ch = curl_init();

$post_id = $_GET["id"];

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts/$post_id");

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true);

$ch = curl_init();

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts/$post_id/comments");

$response = curl_exec($ch);

curl_close($ch);

$comments = json_decode($response, true);

echo "<pre>";
var_dump($comments);
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data["title"]; ?></title>
    <link rel="stylesheet" href="https://fonts.xz.style/serve/inter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.2/new.min.css">
</head>

<body>

    <h1><a href="index.php">Posts</a></h1>
    <h1><?= $data["title"]; ?></h1>
    <p><?= $data["body"]; ?></p>

</body>

</html>