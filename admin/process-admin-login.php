<?php session_start();
//process-member-login.php

$username = 'BBBRealAdmin';
$password = 'adminBBB';
$role = 'Admin';

//check the database for the username and password combination
$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

$pdo = new PDO($dsn, $dbusername, $dbpassword);
$stmt = $pdo->prepare("SELECT `user_id`, `username`, `password`, `role` 
FROM `admin_table` 
WHERE `username` = '$username' AND `password` = '$password' AND `role`= '$role' ;");
$stmt->execute();

//if u/p is correct, 
if($row = $stmt->fetch()){
	//show dashboard
	$_SESSION["user_id"] = $row['user_id'];
	$_SESSION["username"] = $row['username'];
	$_SESSION["loggedIn"] = true;
	?>
    <?php include('constants/header.php');?>
        <section class="section">
        <h1>Hello, <?=$username ?></h1>
        <br/><br/>
        <ul>
        <li><a href="show-menu.php">Manage Menu</a></li>
        <li><a href="edit-about.php">Manage About Us</a></li>
        <li><a href="admin-logout.php">Logout</a></li></ul>
        </section>
    <?php include('constants/footer.php');?>
    <?php
}else{
	//else show error message
	?><p>Error. <a href="member-login.php">Try login again</p><?php
}

?>