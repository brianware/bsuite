<?php
$servername = "localhost";
$username = "webapp";
$password = "a12b34c99D";
$dbname = "bsuite";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "Connection Successful";
}



    $qry = "Create Table fgusers3 (".
        "id_user INT NOT NULL AUTO_INCREMENT ,".
        "name VARCHAR( 128 ) NOT NULL ,".
        "email VARCHAR( 64 ) NOT NULL ,".
        "phone_number VARCHAR( 16 ) NOT NULL ,".
        "username VARCHAR( 16 ) NOT NULL ,".
        "salt VARCHAR( 50 ) NOT NULL ,".
        "password VARCHAR( 80 ) NOT NULL ,".
        "confirmcode VARCHAR(32) ,".
        "PRIMARY KEY ( id_user )".
        ")";


    if ($conn->query($qry) === TRUE) {
        echo "Table  created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }



mysqli_close($conn);
?>