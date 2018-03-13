<?php
	$name="";
	$rollno="";
	$username="";
	$password="";
	$errors=array();
	
	$db=mysqli_connect('localhost:3306','root','','registration');
	if(isset($_POST['register']))
	{
		$name=mysqli_real_escape_string($db,$_POST['name']);
		$rollno=mysqli_real_escape_string($db,$_POST['rollno']);
		$username=mysqli_real_escape_string($db,$_POST['user']);
		$password=mysqli_real_escape_string($db,$_POST['psd']);
		
		if(empty($name))
		{
			array_push($errors, "Name is required");
		}
		if(empty($rollno))
		{
			array_push($errors, "Roll no is required");
		}
		if(empty($username))
		{
			array_push($errors, "Username is required");
		}
		if(empty($password))
		{
			array_push($errors, "Password is required");
		}
		if(count($errors)==0)
		{
			$sql="insert into teacher(name, rollno, username, password) values('$name','$rollno','$username','$password')";
			$status=mysqli_query($db,$sql);
			
			header("Location:tdash.php");
		}
	}
		
?>
	