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
<h1>Delete Confirmation</h1>
<p>Are you sure you want to delete this record?</p>
<div>
	<p>Category: <?= $row["category"] ?></p>
	<p>Name and Price: <?= $row["name_and_price"] ?></p>
	<p>About: <?= $row["about"] ?></p><br><br>
</div>

<a href="show-menu.php">No</a>
<form action="actual-delete-item.php" method="POST">
	<input type="hidden" 
	name="item_id" 
	value="<?= $row['item_id'] ?>"
	>
	<input type="submit" value="Yes">
</form>

</section>

<?php include('constants/footer.php');
?>