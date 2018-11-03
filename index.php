<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">

<style type="text/css">
    .fieldset-auto-width {
         display: inline-block;
    }
</style>
</head> 

<body>
<div class="topnav">
<p style="color:white;padding-left:10px;">B Suite 2018</p>
</div>

<div class="content">
<h1>Welcome to B Suite</h1>
<form id='login' action='login.php' method='post' accept-charset='UTF-8'>
	<fieldset class="fieldset-auto-width">
	<legend>Login</legend>
	<input type='hidden' name='submitted' id='submitted' value='1'/>
	<label for='username' >User Name:</label>
	<input type='text' name='username' id='username'  maxlength="50" />
	<label for='password' >Password:</label>
	<input type='password' name='password' id='password' maxlength="50" />
	<input type='submit' name='Submit' value='Submit' />
	</fieldset>
	</form>

<div class="footer">
  <p>Copyright © 2018 by Brianware</p>
</div>
</body>
  </html>
