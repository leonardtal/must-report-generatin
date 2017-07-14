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
$dbname = "report_generatin";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into students(First_name,Last_name,Reg_no,class,gender,age)
 values('$First_name','$Last_name','$reg_no','$Class','$select','$Age')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>