<?php

$user = 'db_user';
$pass = 'db_password';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=test_sebha_day6', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error connecting to database: " . $e->getMessage();
}
