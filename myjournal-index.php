<?php
require 'db.php';
// this making query to DB
$result = $conn->query("SELECT * FROM stories ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Journal</title>
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
        <h2>Your Stories</h2>
        <?php while($row = $result->fetch_assoc()): ?>
    <div class="story">
        <h3><?= htmlspecialchars($row['title']) ?></h3>
        <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
        <small>🕒 <?= $row['created_at'] ?></small>
        <div class="story-actions">
            <a href="edit.php?id=<?= $row['id'] ?>" class="btn small">✏️ Edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" class="btn small delete" onclick="return confirm('Are you sure?')">🗑️ Delete</a>
        </div>
        <hr>
    </div>
<?php endwhile; ?>

    </main>
</body>
</html>
