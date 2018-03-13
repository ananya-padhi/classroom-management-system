<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>project1</title>
<style>	
		#ul1 {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:white;	
	}
	#li2 {
	float:right;
	}
	#li2 a {
    display: block;
    color: black;
    text-align: center;
    padding: 15px;
    text-decoration: none;
	font-size:20px;}
	#li1 {
    float: left;
	}
	#li1 a {
    display: block;
    color: black;
    text-align: center;
    padding: 15px;
    text-decoration: none;
	font-size:20px;
	}
	table, th, td {
    border: 1px solid black;
	
	}
	th,td{
		padding:15px;
		text-align:center;
	}
</style>
</head>
<body background="C:\xampp\htdocs\projpic\1.jpg" style="background-attachment:fixed;" >
	<h3 align="center" ><img src="C:\xampp\htdocs\projpic\logo.png" style="width:100px;height:100px;float:right;"><u>NATIONAL INSTITUTE OF TECHNOLOGY ROURKELA</u><img src="C:\xampp\htdocs\projpic\pic1.png" style="width:100px;height:100px;float:left;"></h3>
	
	<h1 align="center" ><strong>CLASSROOM MANAGEMENT SYSTEM</strong></h1>
	<h3 align="center" ><strong>STUDENT</strong></h3>
	<ul id="ul1">
		<li id="li1"><a href="stdash.php">Home</a></li>	
		
		<li id="li1"><a href="stimetable.php">Timetable</a></li>	
		<li id="li1"><a href="sassgn.php">Assignments</a></li>	
		<li id="li1"><a href="sppt.php">PPTs or study materials</a></li>
		<li id="li1"><a href="stest.php">Test Details</a></li>
		<li id="li1"><a href="sholiday.php">Holidays</a></li>
		<li id="li2"><a href="project1.php">LOG OUT</a></li>	
	</ul>
	<br/><br/><br/>
	<div align="center">
	<table>
		<tr>
			<th>SUBJECT</th>
			<th>SLIDES OR PPTs</th>
			
		</tr>
	<?php
	$con=mysqli_connect('localhost:3306','root',''); 
	mysqli_select_db($con,'registration') or die("Unable to select database");

	$result= mysqli_query($con, "SELECT subject,filename FROM ppt " );
	while ($row = mysqli_fetch_array($result))
	{ 
	$files_field= $row['filename'];
	$files_show= "uploadppt/$files_field";
	$subject= $row['subject'];
	?>
	<tr>
		<td><?php echo "<font face=arial size=4/>$subject</font>";?></td>
		<td><?php echo "<div align=center><a href='$files_show'>$files_field</a></div>";?></td>
	</tr>
	<?php
	}
?>
</table> 
</div>	
</body>
</html>