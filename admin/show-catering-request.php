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
$stmt = $pdo->prepare("SELECT * FROM `catering_table`;");

//execute
$stmt->execute();

//process results
?>

<?php
    include('constants/header.php');
    ?>

    <section class="section">
        <h1>Manage Catering Request</h2>
        <br/><br/>
        <a href="process-admin-login.php">Back to Admin Panel</a><br><<br>
        <table class="table">
            <tr>
                <th>S.no</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Event Type</th>
                <th>Event Date</th>
                <th>Event Location</th>
                <th>No. of Guests</th>
                <th>Actions</th>
            </tr>

            <?php
            while ($row = $stmt->fetch()) {
                ?>
                <tr>
                    <td><?php echo $row['cater_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phNo']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['event_type']; ?></td>
                    <td><?php echo $row['event_date']; ?></td>
                    <td><?php echo $row['event_location']; ?></td>
                    <td><?php echo $row['no_of_guest']; ?></td>
                    <td>
                        <a href="delete-catering-request.php?id=<?php echo $row['cater_id']; ?>">Delete</a>
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