<?php session_start();
//show-contact-form-submission.php
//show all contact form submissions from contact_form table

if (!isset($_SESSION["loggedIn"]) || $_SESSION["loggedIn"] !== true){
	?><p>You are NOT logged in. This is secret info</p>
	<a href="admin-login.php">Login here</a><?php
	exit();
}else{
?>
<?php
    include('constants/header.php');
    ?>
<section class="section">
<h1> Add an Item </h1>
    <form action="process-add-item.php" method="POST">
    <fieldset>
    
        Category: <input type="text" name="category" /><br><br> 

        Name and Price: <input type="text" name="nameAndPrice" /><br><br>

        About: <input type="text" name="about" /><br><br>
    </fieldset>
        <input type="submit" value="Submit" />
    </form>
    <a href="show-menu.php">Back to Manage Menu</a><br/><br/><br><br/>
<a href="process-admin-login.php">Back to Admin Panel</a>
</section>
<?php include('constants/footer.php');
}
?>
  