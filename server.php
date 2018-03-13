<?php
	$db=mysqli_connect('localhost:8181','root','','pstudent');
	
	
	if(isset($_POST['submit']))
	{
		$name=mysql_real_escape_string($_POST['name']);
		$rollno=mysql_real_escape_string($_POST['rollno']);
		$question=mysql_real_escape_string($_POST['question']);
		$answer=mysql_real_escape_string($_POST['answer']);
		$gender=mysql_real_escape_string($_POST['gender']);
		$bday=mysql_real_escape_string($_POST['bday']);
		$psd=mysql_real_escape_string($_POST['psd']);
		
		
		$sql = "INSERT INTO student(name,rollno,question,answer,psd,gender,bday) 
			VALUES('$name','$rollno','$question','$answer','$psd','$gender','$bday')";
		mysqli_query($db,$sql);
	}
		
?>