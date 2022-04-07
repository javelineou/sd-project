<html>
	<head>
		
		<title> Display students </title>
		<style>
			
			body
			{
				background: #e1f3ff;
			}
			table
			{
				background:white;
			}
			.update, .delete
			{
				background-color: green;
				color:white;
				outline:none;
				border-radius:5px;
				height:22px;
				width:80px;
				font-weight:bold;
				cursor:pointer;
			}
			.delete
			{
				background-color: red;
			}
		</style>
	</head>


<?php
	include("../connection.php");
	
	error_reporting(0);
	
	$query = "SELECT * FROM student";
	$data  = mysqli_query($conn, $query);
	$total = mysqli_num_rows($data);
	
	if($total != 0)
	{
		?>
		
			<h1 align="center">Student Records</h1>
			<center><table border="4" cellspacing="7" width="100%">
				<th width="10%">Name</th>
				<th width="5%">Student ID</th>
				<th width="20%">Faculty</th>
				<th width="5%%">Year</th>
				<th width="10%">Password</th>
				<th width="10%">Level of study</th>
				<th width="5%">Status</th>
				<th width="5%">Vote Status</th>
				<th width="10%">Operations</th>
			
			
		<?php
		while($result = mysqli_fetch_assoc($data))
		{
				echo " <tr>
						<td>".$result[Sname]."</th>
						<td>".$result[Sid]."</td>
						<td>".$result[Sfaculty]."</td>
						<td>".$result[Syear]."</td>
						<td>".$result[Spass]."</td>
						<td>".$result[level_of_study]."</td>
						<td>".$result[status]."</td>
						<td>".$result[vote_status]."</td>
						<td><a href='student-update.php?Sid=$result[Sid]'><input type='submit' value='Update' class='update'></a>
						<a href='student-delete.php?Sid=$result[Sid]'><input type='submit' value='Delete' class='delete' onclick='return checkdelete()'></a></td>
					  </tr>
				";
		}
	}
	else
	{
		echo "No records found in the database";
	}
?>
</table>
</center>



<script>
	
	function checkdelete()
	{
		return confirm('Are you sure to delete this record?');
	}

</script>

























