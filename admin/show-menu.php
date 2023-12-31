<?php session_start();
//show-menu.php

if(!isset($_SESSION["loggedIn"])|| $_SESSION["loggedIn"] != true){
	?>

    <?php include('constants/header.php');?>

    <section class="section">
    <p>You are NOT logged in</p>
	<a href="admin-login.php">Login here</a>
    </section>

    <?php include('constants/footer.php');?>

    <?php
	exit();
}else{

$dsn = "mysql:host=localhost;dbname=bbb;charset=utf8mb4";
$dbusername = "root";  
$dbpassword = "";

//connect
$pdo = new PDO($dsn, $dbusername, $dbpassword);

//prepare
$stmt = $pdo->prepare("SELECT * FROM `menu_table`;");

//execute
$stmt->execute();

//process results
?>

<?php
    include('constants/header.php');
    ?>

    <section class="section">
        <h1>Manage Menu</h2>
        <a href="process-admin-login.php">Back to Admin Panel</a>
        <a class="tableButton" href="add-item.php">Add Item</a><br/>
        <br/><br/><br/>
        <table class="table">
            <tr>
                <th>Item ID</th>
                <th>Category</th>
                <th>Name and Price</th>
                <th>About Item</th>
                <th>Actions</th>
            </tr>

            <?php
            while ($row = $stmt->fetch()) {
                ?>
                <tr>
                    <td><?php echo $row['item_id']; ?></td>
                    <td><?php echo $row['category']; ?></td>
                    <td><?php echo $row['name_and_price']; ?></td>
                    <td><?php echo $row['about']; ?></td>
                    <td>
                        <a href="update-item.php?id=<?php echo $row['item_id']; ?>">Update</a><br/><br/>
                        <a href="delete-item.php?id=<?php echo $row['item_id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>

        </table>
    </section>

    <?php include('constants/footer.php');
}
?>