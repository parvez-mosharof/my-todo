<?php
require 'mytodo-db.php';

if (!isset($_GET['id'])) {
    header('Location: mytodo-index.php');
    exit;
}

$id = (int) $_GET['id'];

$result = $conn->query("SELECT * FROM stories WHERE id = $id");
$story = $result->fetch_assoc();

if (!$story) {
    header('Location: mytodo-index.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);

    $conn->query("UPDATE stories 
                  SET title='$title', content='$content' 
                  WHERE id=$id");

    header('Location: mytodo-index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Story</title>
    <link rel="stylesheet" href="mytodo-style.css">
</head>
<body>

<header>
    <div class="nav-left">
        <a href="index.php" class="logo">My ToDo</a>
    </div>
</header>

<main>
    <h2>Edit Story</h2>

    <form method="post">
        <input type="text" name="title" 
               value="<?= htmlspecialchars($story['title']) ?>" required>

        <textarea name="content" required><?= htmlspecialchars($story['content']) ?></textarea>

        <button type="submit">Update</button>
    </form>
</main>

</body>
</html>