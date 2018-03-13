<?php include('register1.php');?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>project1</title>
<style>	
	.error {color: red;}
</style>
</head>
<body background="C:\xampp\htdocs\projpic\1.jpg" style="background-attachment:fixed;">
	<h3 align="center" ><img src="C:\xampp\htdocs\projpic\logo.png" style="width:100px;height:100px;float:right;"><u>NATIONAL INSTITUTE OF TECHNOLOGY ROURKELA</u><img src="C:\xampp\htdocs\projpic\pic1.png" style="width:100px;height:100px;float:left;"></h3>
	
	<h1 align="center" ><strong>CLASSROOM MANAGEMENT SYSTEM</strong></h1>
	<h2 align="center" ><i><u>Teacher</u></i></h2>
	<h3 align="left"><a href="project1.php" style="color:black;">HOME</a></h3>
	<hr size="20px" color="#909090">

	
	<div align="center" width="100%" height="100%">
		<fieldset style="text-align:center;border:solid;">
			<legend>TEACHER SIGN-UP :</legend>
			<p>* <span class="error"> required field.</span></p>
				<form method="post" action="lt.php" >
					<?php include('errors.php');?>
					NAME:
					<input type="text" name="name" size="50" value="<?php echo $name;?>"> *
					<br/><br/><br/>
					ROLL NO:
					<input type="text" name="rollno" size="50" value="<?php echo $rollno;?>"> *
					<br/><br/><br/>
					USERNAME:
					<input type="text" name="user"size="50" value="<?php echo $username;?>"> *
					<br/><br/><br/>
					PASSWORD:
					<input type="password" name="psd"size="50" > *
					<br/><br/><br/>
					<button type="submit" name="register">Register</button>
					
						
					
				</form>
		</fieldset>
	</div>
		
			
		
		
</body>
</html>