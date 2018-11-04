<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';

sec_session_start();

if (login_check($mysqli) == true) {
    $logged = 'in';
    header('Location: ./home.php');
} else {
    $logged = 'out';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Index</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/style.css">
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 

<style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
    }
</style>
</head>

<body>
<div class="topnav">
<a style="font-weight:bold;color:white;padding-left:10px;">B Suite 2018</a>
</div>

<div class="content">
<h1>Welcome to B Suite</h1>

<?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
?> 
<form action="includes/process_login.php" method="post" name="login_form"> 	
	<fieldset class="fieldset-auto-width">
	<legend>Login</legend>
	<label for='username' >User Name:</label>
	<input type='text' name='username' />
	<label for='password' >Password:</label>
	<input type='password' name='password' id='password'/>
	<input type='button' name='Submit' value='Login' onclick="formhash(this.form, this.form.password);"/>
	</fieldset>		
</form>
</div>

<div class="footer">
  <a>Copyright © 2018 by Brianware Inc</a>
</div>
</body>
  </html>