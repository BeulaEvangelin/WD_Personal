<?php


$category = $_POST["category"];
$nameAndPrice = $_POST["name_and_price"];
$about = $_POST["about"];
$item_id = $_POST["item_id"];

//saves the user data to the database table

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("UPDATE `menu_table` 
SET 
`category`='$category',
`name_and_price`='$nameAndPrice',
`about`='$about' 
WHERE `menu_table`.`item_id`= '$item_id';");

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