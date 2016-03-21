<?php
ob_start();
session_start();
if($_SESSION['name']!='admin')
{
	header('location: login.php');
}
?>
<?php include('../config.php'); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	
	<script>
		function confirm_delete() {
			return confirm('are you sure want to delete this data?');
		}
	</script>
	
	
</head>
<body>
<h2>wellcome <?php echo $_SESSION['name'];?></h2>

<h2>View All Data from Database</h2><br /><br />
<a href="add.php"><button>ADD Product</button></a><br /><br />
<a href="view_appointment.php"><button>View Appointment</button></a><br /><br />

<?php  
//if(isset($error_message)) {echo $error_message;}
//if(isset($success_message)) {echo $success_message;}
?>

<br>

<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>ID</th>
		<th>Product Name</th>
		<th>Person</th>
		<th>Product Info</th>
		<th>Product Image</th>
		<th>Price</th>
		<th>State</th>
		<th>Action</th>
	</tr>
<?php
	$i=0;
	$result = mysql_query("select * from product");
	while($row=mysql_fetch_array($result)) 
	{
		$i++;
		?>
		
		<tr>
		<td><?php echo $row['id'];; ?></td>
		<td><?php echo $row['product_name']; ?></td>
		<td><?php echo $row['person']; ?></td>
		<td><?php echo $row['product_info']; ?></td>
		<td><?php echo "hello Image"//$row['image']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['state']; ?></td>
		<td>
			<a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;|&nbsp;
			<a onclick="return confirm_delete();" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
		</td>
		</tr>
		
		<?php
	}
	
	?>
	
	
</table>


<br>
<br>
<a href="logout.php"><button>Logout</button></a>
	
</body>
</html>