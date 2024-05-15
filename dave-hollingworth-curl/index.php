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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReinX24 Github Repositories</title>
    <link rel="stylesheet" href="css/pico.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" /> -->
</head>

<body>

    <main>
        <h1>Repositories</h1>

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
    </main>
</body>

</html>