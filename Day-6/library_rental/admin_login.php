<?php

include __DIR__ . '/db.php';

if (isset($_GET['logout'])) {
    echo "222";
    session_start();
    unset($_SESSION['user']);
    // header('Location: admin_login.php');
    // exit();
}

$error = '';
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stm = $dbh->prepare('SELECT * FROM users WHERE email = ?');
    $stm->execute([$email]);
    
    if ($user = $stm->fetch(PDO::FETCH_ASSOC)) {
        $password_hash = $user['password'];
        if (password_verify($password, $password_hash)) {
            session_start();
            $_SESSION['user'] = $user;
            header('Location: index.php');
            exit();
        } else {
            $error = 'Email or password incorrect';
        }
    } else {
        $error = 'Email or password incorrect';
    }

}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Admin Login</h4>
                    </div>
                    <div class="card-body">
                        <?php if ($error){ ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>

                        <form action="admin_login.php" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
