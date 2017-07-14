<html>
	<head>
	<title>Retrieve data from database</title>
	</head>
	<body>

	<dl>

	<?php
	// Connect to database server
	mysql_connect("mysql.myhost.com", "root", "") or die (mysql_error ());

	// Select database
	mysql_select_db("report_generation") or die(mysql_error());

	// Get data from the database depending on the value of the id in the URL
	$strSQL = "SELECT * FROM marks WHERE id=" . $_GET["id"];
	$rs = mysql_query($strSQL);
	
	// Loop the recordset $rs
	while($row = mysql_fetch_array($rs)) {

		// Write the data of the person
		echo "<dt>subject:</dt><dd>" . $row["subject"] . "</dd>";
		echo "<dt>marks:</dt><dd>" . $row["marks"] . "</dd>";
		echo "<dt>students_id:</dt><dd>" . $row["students_id"] . "</dd>";

	}

	// Close the database connection
	mysql_close();
	?>

	</dl>
	<p><a href="list.php">Return to the list</a></p>

	</body>

	</html>
	