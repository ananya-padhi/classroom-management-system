<?php include('tdash.php');?>
<?php
	$notice=$_POST['notice'];
	$con=mysqli_connect('localhost:3306','root','');
	mysqli_select_db($con,'registration');
	if(isset($_POST['submit']))
	{
		$result="insert into notice(notice) values('$notice')";
		$status=mysqli_query($con,$result);
		if($status)
		{
			echo "<script type='text/javascript'>alert('Submitted successfully!!')</script>";
		}
	}
		
?>
	