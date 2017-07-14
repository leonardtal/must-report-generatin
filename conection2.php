<?php
$username="root";
$password="";
$database="report_generation";
$servername="127.0.0.1";

@mysql_connect($servername,$username,$password) or die(mysql_error);

//connect to database
@mysql_select_db($database);
?>