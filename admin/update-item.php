<?php

$item_id = $_GET["id"];

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `menu_table` 
	WHERE `menu_table`.`item_id`= '$item_id';");

//execute
$stmt->execute();

//process results
$row = $stmt->fetch();

?>

<?php
    include('constants/header.php');
    ?>

    <section class="section">
        <h1>Update Item</h1>

<form action="process-update-item.php" method="POST">

    <input type="hidden" name="item_id" value="<?= $row["item_id"] ?>"><br><br>
    Category: <input type="text" name="category" value="<?= $row["category"] ?>"><br><br>
    Title: <input type="text" name="name_and_price" value="<?= $row["name_and_price"] ?>"><br><br>
    About: <input type="text" name="about" value="<?= $row["about"] ?>"><br><br>
    <input type="submit">

</form>

</section>

<?php include('constants/footer.php');
?>