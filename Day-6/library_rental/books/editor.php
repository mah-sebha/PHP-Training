<?php

require __DIR__ . '/../auth.php';
include __DIR__ . '/../db.php';

// Get list of genres
$sth = $dbh->query('SELECT * FROM `genres` ORDER BY name');
$genres = $sth->fetchAll(PDO::FETCH_ASSOC);

$message = $_GET['msg'] ?? '';

$book = [];
// Load existing book
if (isset($_GET['id']) && $_GET['id'] > 0) {
    // Select book
    
    $sth = $dbh->prepare('SELECT * FROM books WHERE id = ?');
    $sth->execute([$_GET['id']]);
    $book = $sth->fetch(PDO::FETCH_ASSOC);
    // TODO: check book exists

}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add/Edit Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2>Add/Edit Book</h2>

        <?php if ($message != '') { ?>
        <div class="alert alert-success"><?php echo $message;?></div>
        <?php } ?>

        <form action="save_book.php" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?php echo $book['title'] ?? '' ?>" required>
            </div>
            <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Enter author" value="<?php echo $book['author'] ?? '' ?>" required>
            </div>

            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Enter ISBN" value="<?php echo $book['isbn'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label for="publish_year" class="form-label">Publish Year</label>
                <input type="number" class="form-control" id="publish_year" name="publish_year" placeholder="Enter Publish Year" value="<?php echo $book['publish_year'] ?? '' ?>" required>
            </div>

            <div class="mb-3">
                <label for="genre_id" class="form-label">Genre</label>
                <select class="form-select" id="genre_id" name="genre_id">
                    <option value="">Select Genre</option>
                    <?php

                    foreach ($genres as $genre) {
                        $sel = $book['genre_id'] == $genre['id'] ? 'selected' : '';
                        ?>
                        <option value="<?php echo $genre['id']; ?>" <?php echo $sel; ?>><?php echo $genre['name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="available_quantity" class="form-label">Available Quantity</label>
                <input type="text" class="form-control" id="available_quantity" name="available_quantity" placeholder="Enter quantity" value="<?php echo $book['available_quantity'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter book description"><?php echo $book['description'] ?? '' ?></textarea>
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">File Path</label>
                <input type="text" class="form-control" id="file" name="file" placeholder="Enter file path" value="<?php echo $book['file'] ?? '' ?>">
            </div>
            <div class="row">
                <div class="col"><button type="submit" class="btn btn-primary">Submit</button></div>
                <div class="col"><a href="index.php" class="btn btn-secondary">Back</a></div>
            </div>
            
            

            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : 0; ?>">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
