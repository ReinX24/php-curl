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

<h1>Edit Repository</h1>

<form action="update.php" method="POST">
    <input type="hidden" name="full_name" value="<?= $data["full_name"]; ?>">

    <label for="name">Name</label>
    <input type="text" name="name" value="<?= $data["name"]; ?>">

    <label for="description">Description</label>
    <textarea name="description"><?= htmlspecialchars($data["description"]) ?></textarea>

    <button>Submit</button>
</form>

<?php require_once "includes/footer.html"; ?>