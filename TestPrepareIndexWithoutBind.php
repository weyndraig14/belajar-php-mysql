<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$username = "agung";
$password = "random";

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement->execute([$username, $password]);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    // sukses
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Sukse login : " . $find_user . PHP_EOL;
} else {
    echo "Gagal login" . PHP_EOL;
}

$connection = null;