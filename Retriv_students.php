<head>
<title>


</title>
<center>
<br>
<h1 style=background-color: #fff;
>MBARARA UNIVERSITY OF SCIENCE AND TECHNOLOGY</h1>
<br>

</center>
<style>
* {
	margin: 0;
	padding: 0;
	outline: none;
}
.wpcf7 {
	margin: 30px 0 0;
	padding: 0;
}
div.wpcf7 {
	margin: 0;
	padding: 0;
}
.site-main {
	width: 740px;
	margin: 0;
	padding: 0;
	float: left;
}
.page_content {
	padding: 25px 0;
}
.container {
	width: 1100px;
	margin: 0 auto;
	position: relative;
}
body {
	background-color: #fff;
	margin: 0;
	padding: 0;
	color: #5d5c5c;
	font: normal 13px/20px "Arimo", sans-serif;
	position: relative;
}
p {
	margin: 0;
	padding: 0;
}
.page_content p {
	margin-bottom: 20px;
	line-height: 20px;
}
.wpcf7-display-none {
	display: none;
}
div.wpcf7-response-output {
	margin: 2em 0.5em 1em;
	padding: 0.2em 1em;
}
.wpcf7 input[type='submit'] {
	background-color: #efc62c;
	width: auto;
	border: none;
	cursor: pointer;
	text-transform: uppercase;
	font: 18px "Roboto", san-serif;
	color: #ffffff;
	padding: 10px 40px;
	border-radius: 3px;
}
.social-icons a:hover, .pagination ul li .current, .pagination ul li a:hover,
 #commentform input#submit:hover, .ReadMore, .ReadMore:hover, .nivo-controlNav a.active, h3.widget-title, 
 .header .header-inner .nav ul li a:hover, .header .header-inner .nav ul li.current_page_item a, .MoreLink:hover, .wpcf7 input[type='submit'] {
	background-color: #28e0da;
}
div.wpcf7 .ajax-loader {
	visibility: hidden;
	display: inline-block;
	background-image: url('../../images/ajax-loader.gif');
	width: 16px;
	height: 16px;
	border: none;
	padding: 0;
	margin: 0 0 0 4px;
	vertical-align: middle;
}
.wpcf7-form-control-wrap {
	position: relative;
}
.wpcf7 textarea {
	width: 60%;
	border: 1px solid #cccccc;
	box-shadow: inset 1px 1px 2px #ccc;
	height: 150px;
	color: #797979;
	margin-bottom: 25px;
	font: 12px arial;
	padding: 10px;
	padding-right: 0px;
}
.wpcf7 input[type='text'], .wpcf7 input[type='tel'], .wpcf7 input[type='email'] {
	width: 40%;
	border: 1px solid #cccccc;
	box-shadow: inset 1px 1px 2px #ccc;
	height: 35px;
	padding: 0 15px;
	color: #797979;
	margin-bottom: 0px;
}
</style>
</head>  
<?php
require("conection.php");

$result = mysql_query("SELECT * FROM marks");


echo "<table style='border-style:groove; border-width:5px; color:#960; border-collapse:collapse; width:65%;margin-left:5.5%; background-color: white;'>
<tr style='background-color: green; color: black;'>
<th style='border-style:groove; border-width:2px;'>subject</th>
<th style='border-style:groove; border-width:2px;'>marks</th>
<th style='border-style:groove; border-width:2px;'>students_id</th>
<th style='border-style:groove; border-width:2px;'>UPDATE GRADES</th>
<th style='border-style:groove; border-width:2px;'>EDIT</th>
<th style='border-style:groove; border-width:2px;'>DELETE</th>



</tr>";

while($row = mysql_fetch_array($result))
  {
echo "
  <tr>
   <td style='border-style:groove; border-width:2px;'>" . $row['subject'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['marks'] . "</td>
   <td style='border-style:groove; border-width:2px;'>" . $row['students_id'] . "</td>
  <form action='UpdateGrade.php' method='post'>
  <td style='border-style:groove; border-width:2px;'>
   <input type='hidden' name='id' value='".$row['Students_id']."'> 
   <input type='submit' value='Update grade'>
   </td>
   </form>
   <form action='editingform2.php' method='post'>
  <td style='border-style:groove; border-width:2px;'>
   <input type='hidden' name='id' value='".$row['Students_id']."'> 
   <input type='submit' value='edit'>
   </td>
   </form>
   <form action='deletingform2.php' method='post'>
   <td style='border-style:groove; border-width:2px;'>
   <input type='hidden' name='kk' value='".$row['Students_id']."'>
   <input type='submit' value='delete' onclick='return confirm(are you sure you want to delete ?)'</td>
   </form>
   
   ";
  
  ?>
  <?php
  echo "</tr>";
  }
echo "</table>";

?>
