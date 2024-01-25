<?php

include __DIR__ . '/../db.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Books List</h2>
        <a href="editor.php?id=0" class="btn btn-primary">Add New Book</a>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // PHP code to fetch books from the database and display
                $sql = "SELECT * FROM books";
                $sth = $dbh->query($sql);
                $books = $sth->fetchAll(PDO::FETCH_ASSOC);
                foreach ($books as $book) {
                    echo "<tr>
                    <td>".$book['title']."</td>
                    <td>".$book['author']."</td>
                    <td>".$book['publish_year']."</td>
                    <td>
                    <a href='editor.php?id=".$book['id']."' class='btn btn-secondary'>Edit</a>
                    <a href='delete_book.php?id=".$book['id']."' class='btn btn-danger'>Delete</a>
                    </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
