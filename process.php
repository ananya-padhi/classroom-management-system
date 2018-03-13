	<?php
	$username=$_POST['user'];
	$password=$_POST['psd'];
	
	$con=mysqli_connect("localhost:3306","root","");
	mysqli_select_db($con,"registration");
	
	$result=mysqli_query($con,"select * from student where username ='$username' and password='$password'") 
	or die("failed to query database".mysqli_connect_error());
	$row=mysqli_fetch_array($result);
	if($row['username']==$username && $row['password']==$password)
	{
		header("Location:stdash.php");
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('Login failed! Please enter correct username and password.')</script>";
	}
	?>
	