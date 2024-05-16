<?php

$ch = curl_init();

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true
]);

curl_setopt($ch, CURLOPT_URL, "https://jsonplaceholder.typicode.com/posts");

$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response, true); // return as an associative array

// echo "<pre>";
// print_r($data);
// echo "</pre>";

?>

<?php require_once "includes/header.php"; ?>

<h1>Posts</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $post) : ?>
            <tr>
                <td><?= $post["id"]; ?></td>
                <td>
                    <a href="post.php?id=<?= $post["id"]; ?>"><?= $post["title"]; ?></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once "includes/footer.php"; ?>