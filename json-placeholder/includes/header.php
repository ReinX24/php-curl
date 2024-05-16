<?php

switch ($_SERVER["PHP_SELF"]) {
    case "/php-curl/json-placeholder/index.php":
        $title = "Posts";
        break;

    case "/php-curl/json-placeholder/post.php":
        $title = $data["title"];
        break;
}

// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="https://fonts.xz.style/serve/inter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@exampledev/new.css@1.1.2/new.min.css">
</head>

<body>