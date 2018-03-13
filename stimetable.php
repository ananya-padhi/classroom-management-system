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
		padding:5px;
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
	<br/><br/>
	<div align="center">
	<table style="width:100%">
	<caption>TIMETABLE</caption>
	<br/><br/>
	<tr>
		<th></th>
		<th>8:00-9:00</th>
		<th>9:00-10:00</th> 
		<th>10:00-11:00</th>
		<th>11:00-12:00</th>
		<th>12:00-1:15</th>
		<th>1:15-2:15</th>
		<th>2:15-3:15</th>
		<th>3:15-4:15</th>
		<th>4:15-5:15</th>
	</tr>
	<tr>
		<th>MONDAY</th>
		<td colspan="3" align="center">DIGITAL LAB</td>
		<td>OE</td>
		<td rowspan="5" align="center">LUNCH</td>
		<td>DBMS</td>
		<td>DIGITAL</td>
		<td>MATHS</td>
		<td>ANALOG</td>
	</tr>
	<tr>
		<th>TUESDAY</th>
		<td colspan="3" align="center">DATA STRUCTURE AND DBMS LAB</td>
		<td>OE</td>
		
		<td> - </td>
		<td>MATHS</td>
		<td> - </td>
		<td>ANALOG</td>
	</tr>
	<tr>
		<th>WEDNESDAY</th>
		<td colspan="2" align="center"> --- </td>
		<td>DIGITAL</td>
		<td>MATHS</td>
		
		<td> - </td>
		<td colspan="3">BASIC ELECTRIONICS LAB</td>
		
	</tr>
	<tr>
		<th>THURSDAY</th>
		<td colspan="3" align="center">NUMERICAL METHODS</td>
		<td> - </td>
		
		<td>MATHS</td>
		<td> - </td>
		<td>DBMS</td>
		<td>ANALOG</td>
	</tr>
	<tr>
		<th>FRIDAY</th>
		<td colspan="3" align="center"> --- </td>
		<td>OE</td>
		
		<td> - </td>
		<td>DBMS</td>
		<td>DIGITAL</td>
		<td>ANALOG</td>
	</tr>
	<tr>
		<th>SATURDAY</th>
		<td colspan="9" align="center">HOLIDAY</td>
	</tr>
	
</table>

	</div>
</body>
</html>