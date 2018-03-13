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
	<h3 align="center" ><strong>TEACHER</strong></h3>
	
	<ul id="ul1">
		<li id="li1"><a href="tdash.php">Home</a></li>	
			
		<li id="li1"><a href="tassgn.php">Add Assignments</a></li>	
		<li id="li1"><a href="tppt.php">Add PPTs or study materials</a></li>
		<li id="li1"><a href="ttest.php">Add Test Details </a></li>
		<li id="li1"><a href="tholiday.php">Add Holidays </a></li>
		<li id="li1"><a href="tbook.php">Book room </a></li>
		<li id="li2"><a href="project1.php">LOG OUT</a></li>	
	</ul>
	<br/><br/><br/>
	<div align="center" width="100%" height="100%">
		<fieldset style="text-align:center;border:solid;">
			<br/><br/>
			
				<form method="post" action="holi.php" >
					DATE:
					<input type="date" name="date"  >
					<br/><br/><br/>
					REASON:
					<input type="text" name="reason"  >
					<br/><br/><br/>
					EXTRA CLASS ON:
					<input type="date" name="newdate"  >
					<br/><br/><br/>
					SUBJECT:
					<input type="text" name="sub"  >
					<br/><br/><br/>
					TIMING FOR EXTRA CLASS:
					<input type="time" name="time"  >
					<br/><br/><br/>
					
					
					<button type="submit" name="submit">SUBMIT</button>
					
				<br/><br/>		
					
				</form>
		</fieldset>
	</div>
	</body>
</html>