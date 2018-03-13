<?php
	$day=$_POST['date'];
	$reason=$_POST['reason'];
	$extra=$_POST['newdate'];
	$subject=$_POST['sub'];
	$time=$_POST['time'];
	
	$con=mysqli_connect('localhost:3306','root','');
	mysqli_select_db($con,'registration');
	if(isset($_POST['submit']))
	{
		$result="insert into holiday(day, reason, extra, subject, time) values('$day','$reason','$extra','$subject','$time')";
		$status=mysqli_query($con,$result);
		if($status)
		{
			echo "<script type='text/javascript'>alert('Submitted successfully!!')</script>";
		}
	}
		
?>
	