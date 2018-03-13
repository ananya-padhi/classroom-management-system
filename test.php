<?php
	$subject=$_POST['subject'];
	$date=$_POST['date'];
	$chapter=$_POST['chaps'];
	$marks=$_POST['marks'];
	
	$con=mysqli_connect('localhost:3306','root','');
	mysqli_select_db($con,'registration');
	if(isset($_POST['submit']))
	{
		$result="insert into test(subject, date, chapter, marks) values('$subject','$date','$chapter','$marks')";
		$status=mysqli_query($con,$result);
		if($status)
		{
			echo "<script type='text/javascript'>alert('Submitted successfully!!')</script>";
		}
	}
		
?>
	