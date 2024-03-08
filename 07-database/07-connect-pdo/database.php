<?php
// Database Creds
$host = 'mysql';
$port = 3306;
$dbName = 'blog';
$username = 'root';
$password = 'root';

$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
    // Create PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'Database Connected...';

    //Fetch as Assoc array
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    // If there is an error, catch it here
    echo 'Connection Failed: ' . $e->getMessage();
}
