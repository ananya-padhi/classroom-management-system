<?php
	
	$name="";
	$class="";
	$school="";
	$password="";
	$errors=array();
	
	$db=mysqli_connect('localhost:3306','root','','registration');
	if(isset($_POST['register']))
	{
		$name=mysqli_real_escape_string($db,$_POST['name']);
		$class=mysqli_real_escape_string($db,$_POST['class']);
		$school=mysqli_real_escape_string($db,$_POST['school']);
		$password=mysqli_real_escape_string($db,$_POST['psd']);
		
		if(empty($name))
		{
			array_push($errors, "Name is required");
		}
		if(empty($class))
		{
			array_push($errors, "Class is required");
		}
		if(empty($school))
		{
			array_push($errors, "School is required");
		}
		if(empty($password))
		{
			array_push($errors, "Password is required");
		}
		if(count($errors)==0)
		{
			$sql="insert into mtse(name, class, school, password) values('$name','$class','$school','$password')";
			$status=mysqli_query($db,$sql);
		}
	}
		
?>
	