<?php

//receives user-submitted data


$category = $_POST["category"];
$nameAndPrice = $_POST["nameAndPrice"];
$about = $_POST["about"];

//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("INSERT INTO `menu_table`
(`item_id`, `category`, `name_and_price`, `about`) 
VALUES 
(NULL, '$category', '$nameAndPrice', '$about');");

//execute

if($stmt->execute()){ ?>
<?php
    include('constants/header.php');
    ?>
<section class="section">
	<h1>Success!</h1>
	<h4>You submitted the following:</h4>

        <p>Category: <?=$category?></p> 
        <p>Title: <?=$nameAndPrice?></p> 
        <p>Author: <?=$about?></p> 



<?php
}else{ 
	?><h1>Error</h1> 
    </section>
    <?php include('constants/footer.php');
}
?>
