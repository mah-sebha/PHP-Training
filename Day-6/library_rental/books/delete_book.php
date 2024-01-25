<?php

include __DIR__ . '/../db.php';

$id = $_GET['id'];

// get book
$sth = $dbh->prepare('SELECT * FROM books WHERE id = ?');
$sth->execute([$id]);
$book = $sth->fetch(PDO::FETCH_ASSOC);
// TODO: check book exists

if (isset($_POST['delete'])) {
    // delete book
    $sth = $dbh->prepare('DELETE FROM books WHERE id = ?');
    $sth->execute([$id]);
    header('Location: index.php');
    exit;
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Delete Book</h2>
        <p>Are you sure you want to delete this book <strong><?php echo $book['title'];?></strong>?</p>
        <form action="" method="post">
            <input type="hidden" name="delete" value="1">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
