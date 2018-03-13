

<?php
 	$con=mysqli_connect("localhost:3306","root","");
	mysqli_select_db($con,"registration");
	
	$result=mysqli_query($con,"select * from test ");
	
		
	while($row = mysqli_fetch_array($result))
	{
		?>
		<table >
		<tr>
			<td><?php echo $row['subject']; ?> </td>
			<td><?php echo $row['date']; ?></td>
			<td><?php echo $row['chapter'];?></td>
			<td><?php echo $row['marks']; ?></td>
		</tr>
		</table>
		<?php
	}
	?>
	