<?php

$name = $_POST["name"];
$phNo = $_POST["phNo"];
$email = $_POST["email"];
$eventType = isset($_POST["limited"]) ? "Limited Service Catering" : (isset($_POST["full"]) ? "Full Service Catering" : "");
$eventDate = $_POST["eventDate"];
$eventLoc = $_POST["eventLoc"];
$guestNo = $_POST["guestNo"];


$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";
$dbpassword = "";
$pdo = new PDO($dsn, $dbusername, $dbpassword);


$success = true;

$stmt = $pdo->prepare("INSERT INTO `catering_table` 
(`cater_id`, `name`, `email`, `event_type`, `event_date`, `event_location`, `no_of_guest`) 
VALUES 
(NULL, '$name', '$email', '$eventType', '$eventDate', '$eventLoc', '$guestNo')");

if (!$stmt->execute()) {
    $success = false;
}

if ($success) {
    echo '{"success": true}';
} else {
    echo '{"error": "Database error"}';
}
?>