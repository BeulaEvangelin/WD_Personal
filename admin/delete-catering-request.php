<?php

$cater_id = $_GET["id"];

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `catering_table` 
	WHERE `catering_table`.`cater_id`= '$cater_id';");

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
<p>Are you sure you want to delete this record?</p><br><br>
<div>
	<p>S.no: <?= $row['cater_id'] ?></p>
	<p>Name and Price: <?= $row['name'] ?></p>
	<p>Phone Number: <?= $row['phNo'] ?></p>
    <p>Email: <?= $row['email'] ?></p>
	<p>Event Type: <?= $row['event_type'] ?></p>
	<p>Event Date: <?= $row['event_date'] ?></p>
    <p>Event Location: <?= $row['event_location'] ?></p>
    <p>No. of Guests: <?= $row['no_of_guest'] ?></p><br><br>
</div>

<a href="show-menu.php">No</a>
<form action="actual-delete-catering-request.php" method="POST">
	<input type="hidden" 
	name="cater_id" 
	value="<?= $row['cater_id'] ?>"
	>
	<input type="submit" value="Yes">
</form>

</section>

<?php include('constants/footer.php');
?>