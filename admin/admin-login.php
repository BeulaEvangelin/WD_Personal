<?php
//admin-login.php
?>

<?php include('constants/header.php');?>


<section class="section">
<h1>Login</h1><br/><br/>
<form name="adminlogin" action="process-admin-login.php" method="POST">
<fieldset>
    <legend>Enter ADMIN username and password</legend>

        <label>Username:</label>
        <input type="text" name="username" required>

        <label>Password:</label>
        <input type="text" name="password" required>

        <input type="submit" value="Submit">
</fieldset>

<?php include('constants/footer.php');?>

