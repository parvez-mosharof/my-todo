<?php
require 'db.php';
// this makes logic here ti delete
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $conn->query("DELETE FROM stories WHERE id = $id");
}
// this redirecting to home after deleting
header("Location: myjournal-index.php");
exit;
