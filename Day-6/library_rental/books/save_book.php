<?php

include __DIR__ . '/../db.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
} else {
    $id = 0;
}

$values = [
    ':title' => $_POST['title'],
    ':author' => $_POST['author'],
    ':publish_year' => $_POST['publish_year'],
    ':isbn' => $_POST['isbn'],
    ':genre_id' => $_POST['genre_id'],
    ':available_quantity' => $_POST['available_quantity'],
    ':description' => $_POST['description'],
    ':file' => $_POST['file'],
];

if ($id == 0) {
    $sql = "INSERT INTO books (title, author, publish_year, isbn, genre_id, available_quantity, description, file) VALUES (:title, :author, :publish_year, :isbn, :genre_id, :available_quantity, :description, :file)";
} else {
    $sql = "UPDATE books SET title = :title, author = :author, publish_year = :publish_year, isbn = :isbn, genre_id = :genre_id, available_quantity = :available_quantity, description = :description, file = :file WHERE id = :id";
    $values[':id'] = $id;
}

$sth = $dbh->prepare($sql);
$sth->execute($values);

$message = 'Book saved';
if ($id == 0) {
    $message = 'Book added';
    $id = $dbh->lastInsertId();
}

header('Location: editor.php?id=' . $id . '&msg=' . $message);
exit();