<?php
require 'db.php';

if (!isset($_GET['id'])) {
    header('Location: myjournal-index.php');
    exit;
}

$id = (int)$_GET['id'];
$result = $conn->query("SELECT * FROM stories WHERE id = $id");
$story = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $conn->real_escape_string($_POST['title']);
    $content = $conn->real_escape_string($_POST['content']);

    $conn->query("UPDATE stories SET title='$title', content='$content' WHERE id=$id");
    header("Location: myjournal-index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Story</title>
    <link rel="stylesheet" href="myjournal-style.css">
</head>
<body>
    <header>
        <div class="nav-left">
            <a href="myjournal-index.php" class="logo">My Journal</a>
        </div>
        <div class="nav-right">
            <a href="myjournal-add.php" class="btn">➕ Add New Story</a>
        </div>
    </header>

    <main>
        <h2>Edit Story</h2>
        <form method="post">
            <input type="text" name="title" value="<?= htmlspecialchars($story['title']) ?>" required><br>
            <textarea name="content" required><?= htmlspecialchars($story['content']) ?></textarea><br>
            <button type="submit">Update</button>
        </form>
    </main>
</body>
</html>
