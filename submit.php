<?php
$First_name=$_POST['First_name'];
$Last_name=$_POST['Last_name'];
$reg_no=$_POST['reg_no'];
$Class=$_POST['Class'];
$select=$_POST['select'];
$Age=$_POST['Age'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report_generation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//insert the information

$sql = "insert into students(First_name,Last_name,Reg_no,class,gender,age)
 values('$First_name','$Last_name','$reg_no','$Class','$select','$Age')";

//execute query
$if ($conn->query($sql) === TRUE) {
	
    echo "New record created successfully";
	
} else {
	
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>