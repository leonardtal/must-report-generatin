<?php
$username="root";
$password="";
$database="report_generation";
$servername="127.0.0.1";
$con = mysqli_connect("localhost","root","","report_generation");
if(mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	
}

?>