<?php

$host = "localhost";
$port = 3307;
$database = "belajar_php_database";
$username = "root";
$password = "";


try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses terkoneksi ke database mySQL" . PHP_EOL;

    // menutup koneksi
    $connection = null;

}catch (PDOException $exception) {
    echo "Gagal terkoneksi ke database mySQL :" .  $exception->getMessage() . PHP_EOL;
}


