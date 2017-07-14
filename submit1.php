<?php
$subject=$_POST['subject'];
$marks=$_POST['marks'];
$students_id=$_POST['students_id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "report_generation";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "insert into marks(subject,marks,students_id)
 values('$subject','$marks','$students_id')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>