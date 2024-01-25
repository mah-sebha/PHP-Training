<?php

include __DIR__ . '/db.php';

$email = 'tlarson@example.net';
$password = '123456';

$hash = password_hash($password, PASSWORD_BCRYPT);

// Update user password

$stm = $dbh->prepare('UPDATE users SET password = ? WHERE email = ?');
$stm->execute([$hash, $email]);

echo "Done\n";

