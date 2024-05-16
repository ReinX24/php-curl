<?php require_once "includes/header.html"; ?>

<h1>New Repository</h1>

<form action="create.php" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name">

    <label for="description">Description</label>
    <textarea name="description"></textarea>

    <button>Submit</button>
</form>

<?php require_once "includes/footer.html"; ?>