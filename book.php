<?php include('tbook.php');?>
<?php
	if(isset($_POST['submit']))
	{
		$roomno=$_POST['room'];
		$time=$_POST['time'];
		$date=$_POST['date'];
		
		$con=mysqli_connect('localhost:3306','root','');
		mysqli_select_db($con,'registration');
		$check=mysqli_query($con,"select * from room where roomno='$roomno' and time='$time' and day='$date'");
		$check1=mysqli_num_rows($check);
	if($check1 == 0) 
	{
		$result="insert into room(roomno,time,day) values('$roomno','$time','$date')";
		$status=mysqli_query($con,$result);
	
		if($status)
		{
			echo "<script type='text/javascript'>alert('Slot available!!')</script>";
		}
		
	} 
	else { 
		echo "<script type='text/javascript'>alert('Room is already booked!! Please book another room...')</script>";
	}
	}
  
?>
	