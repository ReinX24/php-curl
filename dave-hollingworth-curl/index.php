<?php

$ch = include_once "includes/init_curl.php";

curl_setopt($ch, CURLOPT_URL, "https://api.github.com/user/repos");

$response = curl_exec($ch);

curl_close($ch);

// Converting the data into an associative array
$data = json_decode($response, true);

// Printing full_name attribute of each array within the $data array
// foreach ($data as $eachData) {
//     echo $eachData["full_name"] . "<br>";
// }

// Printing each element
// foreach ($data as $repository) {
//     echo $repository["full_name"] . " "
//         . $repository["name"] . " "
//         . $repository["description"] . "<br>";
// }

?>

<?php require_once "includes/header.html"; ?>

<h1>Repositories</h1>

<a href="new.php">New Repository</a>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $repository) : ?>
            <tr>
                <td>
                    <a href="show.php?full_name=<?= $repository["full_name"]; ?>">
                        <?= $repository["full_name"]; ?>
                    </a>
                </td>
                <td><?= htmlspecialchars($repository["description"]); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once "includes/footer.html"; ?>