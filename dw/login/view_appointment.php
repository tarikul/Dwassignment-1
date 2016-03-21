<?php
ob_start();
session_start();
if($_SESSION['name']!='admin')
{
	header('location: login.php');
}
?>
<?php include('../config.php'); ?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

<h2>wellcome <?php echo $_SESSION['name'];?></h2>

<h2>View All Data from Database</h2><br /><br />
<a href="add.php"><button>ADD Product</button></a><br /><br />
<a href="view_appointment.php"><button>View Appointment</button></a><br /><br />

	<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>Appointment ID</th>
		<th>User Name</th>
		<th>Person</th>
		<th>Country</th>
		<th>Appointment Date</th>
		<th>Appointment Time</th>
		<th>Product ID</th>
		
	</tr>
<?php
	$i=0;
	$result = mysql_query("select * from appointment");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		
		<tr>
		<td><?php echo $row['appoint_id'];; ?></td>
		<td><?php echo $row['username']; ?></td>
		<td><?php echo $row['person']; ?></td>
		<td><?php echo $row['country']; ?></td>
		
		<td><?php echo $row['date']; ?></td>
		<td><?php echo $row['time']; ?></td>
		<td><?php echo $row['product_id']; ?></td>
		
		</tr>
		
		<?php
	}
	
	?>
	
	
</table>


<br>
<br>
<a href="admin.php"><button>Back</button></a>
<a href="logout.php"><button>Logout</button></a>
</body>
</html>