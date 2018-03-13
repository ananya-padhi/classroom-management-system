<?php include('tassgn.php');?>
<?php
	
	$con=mysqli_connect('localhost:3306','root','');
	mysqli_select_db($con,'registration');
	if($_POST['submit'])
	{
		$filename=$_FILES['uploadedfile']['name'];
		$tmpname=$_FILES['uploadedfile']['tmp_name'];
		$subject=$_POST['sub'];
		if(move_uploaded_file($tmpname,'uploadfile/'.$filename));
		
		$result="insert into assignment(filename,subject) values('$filename','$subject')";
		$query=mysqli_query($con,$result);
		
		if($query==true)
		{
			echo "<script type='text/javascript'>alert('File uploaded successfully!!')</script>";
		}
		
	}
?>