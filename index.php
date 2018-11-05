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
<script type="text/JavaScript" src="js/sha512.js"></script> 
<script type="text/JavaScript" src="js/forms.js"></script> 

<style>
body {font-family: Arial, Helvetica, sans-serif;}
 /* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }

/* Add a hover effect for buttons */
.button:hover {
    opacity: 0.8;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* Modal Content/Box */
.modal-content {
    
    background-color: #fefefe;
    border: 1px solid #888;
    margin: 50px auto;
    display: table;
    width: 400px;
}
</style>

</head>
<body>

<?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
?> 
<form class="modal-content" action="includes/process_login.php" method="post" name="login_form">
 <div class="imgcontainer">
  <img src="avatar.png" class="avatar">
 </div>
    
 <div class="container">
  <label for='username'><b>Username</b></label>
   <input type="text" placeholder="Enter Username" name='username' required>
  <label for='password'><b>Password</b></label>
   <input type='password' placeholder="Enter Password" name='password' id='password' required>
 </div>

 <div class="container" style="background-color:#f1f1f1">
  <input type='button' class="button" name='Submit' value='Login' onclick="formhash(this.form, this.form.password);"/>
  <p style="text-align:right;font-size:10px;">Copyright © 2018 by Brianware Inc</p>
 </div>
</form>
</body>
</html>