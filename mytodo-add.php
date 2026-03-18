<?php
require 'mytodo-db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);

    $sql = "INSERT INTO stories (title, content) VALUES ('$title', '$content')";

    if ($conn->query($sql)) {
        header('Location: index.php');
        exit;
    } else {
        echo 'Error: ' . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Story</title>
    <link rel="stylesheet" href="mytodo-style.css">
</head>
<body>

<header>
    <div class="nav-left">
        <a href="index.php" class="logo">My ToDo</a>
    </div>
</header>

<main>
    <h2>Add New Story</h2>

    <form method="post">
        <input type="text" name="title" placeholder="Story Title" required>
        <textarea name="content" placeholder="Write your story..." required></textarea>
        <button type="submit">Save</button>
    </form>
</main>

</body>
</html>