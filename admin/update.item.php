<?php

$item_id = $_GET["item_id"];

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `articles_page` 
	WHERE `articles_page`.`article_id` = $article_id;");

//execute
$stmt->execute();

//process results
$row = $stmt->fetch();

?>

<form action="process-update-item.php" method="POST">

    <input type="hidden" name="article_id" value="<?= $row["article_id"] ?>"><br><br>
    Category: <input type="text" name="category" value="<?= $row["category"] ?>"><br><br>
    Title: <input type="text" name="title" value="<?= $row["title"] ?>"><br><br>
    Author: <input type="text" name="author" value="<?= $row["author"] ?>"><br><br>
    Content: <input type="text" name="content" value="<?= $row["content"] ?>"><br><br>
    <h4>Set Featured (Enter 1 for YES, 0 for NO):</h4> <input type="text" name="featured" value="<?= $row["featured"] ?>"><br><br>
    <input type="submit">

</form>