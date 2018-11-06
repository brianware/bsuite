<?php
$serverName = "192.168.0.194\sqlexpress,1433"; //serverName\instanceName, portNumber (default is 1433)
$connectionInfo = array( "Database"=>"CNLPOS", "UID"=>"sa", "PWD"=>"A12b34c99d");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}
?>