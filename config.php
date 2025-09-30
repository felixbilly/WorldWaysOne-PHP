<?php
// config.php
$host = "127.0.0.1";
$dbname = "image_hosting";
$username = "root"; // or your MySQL user
$password = "";     // set your MySQL password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("DB Connection failed: " . $e->getMessage());
}
?>