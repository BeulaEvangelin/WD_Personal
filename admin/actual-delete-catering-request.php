<?php

$cater_id = $_POST["cater_id"];

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("DELETE FROM `catering_table` 
WHERE `catering_table`.`cater_id`= '$cater_id';");

//execute
if($stmt->execute()){
	?>
	<?php
    include('constants/header.php');
    ?>

    <section class="section">
	<p> S.no: <?=$cater_id ?> Deleted</p><br><br><br><?php
}else{
	?><p>Could not delete record</p><?php
}
?>
<a href="show-catering-request.php">Back to Manage Catering Request</a><br><br><br><br>
<a href="process-admin-login.php">Back to Admin Panel</a>
</section>

<?php include('constants/footer.php');
?>