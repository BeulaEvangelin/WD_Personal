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
$stmt = $pdo->prepare("SELECT * FROM `newsletter_table`;");

//execute
$stmt->execute();

//process results
?>

<?php
    include('constants/header.php');
    ?>

    <section class="section">
        <h1>BBB Newsletter Subscribers</h2>
        <br/><br/>
        <a href="process-admin-login.php">Back to Admin Panel</a><br><<br>
        <table class="table">
            <tr>
                <th>S.no</th>
                <th>Email ID</th>
            </tr>

            <?php
            while ($row = $stmt->fetch()) {
                ?>
                <tr>
                    <td><?php echo $row['newsletter_id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <?php
            }
            ?>

        </table>
    </section>

    <?php include('constants/footer.php');
}
?>