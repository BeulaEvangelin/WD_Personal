<?php

$email = $_POST["email"];

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);


$success = true;

$stmt = $pdo->prepare("INSERT INTO `newsletter_table` 
(`newsletter_id`, `email`) 
VALUES 
(NULL, '$email')");

if (!$stmt->execute()) {
    $success = false;
}

if ($success) {
    echo '{"success": true}';
} else {
    echo '{"error": "Database error"}';
}
?>