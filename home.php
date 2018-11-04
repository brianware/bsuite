<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == false) {
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/style.css">
</head>

<body>
<div class="topnav">
 <p style="font-weight:bold;color:white;padding:0px 10px;float: left;">B Suite 2018</p>
 <a style="margin-left:85px;"href="#">Link</a>
 <a href="#">Link</a>
 <a href="#">Link</a>
  <div class="topnav-right">
   <a style="font-weight:bold;color:white;padding-left:10px;text-align:right;" href="includes/logout.php">Logout</a>
  </div>
</div>

<div class="content">
 <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
</div>

<div class="sidenav">
 <a href="#">Link</a>
</div>

<div class="footer">
  <p>Copyright © 2018 by Brianware Inc</p>
</div>
</body>
</html>