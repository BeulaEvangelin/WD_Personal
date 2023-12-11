<?php

$item_id = $_POST["item_id"];

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("DELETE FROM `menu_table` WHERE `menu_table`.`item_id`= '$item_id';");

//execute
if($stmt->execute()){
	?>
	<?php
    include('constants/header.php');
    ?>

    <section class="section">
	<p>Item ID No: <?=$item_id ?> Deleted</p><br><br><br><?php
}else{
	?><p>Could not delete record</p><?php
}
?>
<a href="show-menu.php">Back to Manage Menu</a><br><br><br><br>
<a href="process-admin-login.php">Back to Admin Panel</a>
</section>

<?php include('constants/footer.php');
?>