<?php include('squery.php');?>
<?php
	$question=$_POST['question'];
	$tid=$_POST['tid'];
	
	$con=mysqli_connect('localhost:3306','root','');
	mysqli_select_db($con,'registration');
	if(isset($_POST['submit']))
	{
		$result="insert into query(question, tid) values('$question','$tid')";
		$status=mysqli_query($con,$result);
		if($status)
		{
			echo "<script type='text/javascript'>alert('Submitted successfully!!')</script>";
		}
	}
		
?>
	