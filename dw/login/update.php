<?php
ob_start();
session_start();
if($_SESSION['name']!='admin')
{
	header('location: login.php');
}
?>
<?php
include('../config.php');

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
}
else {
	header('location: admin.php');
}

if(isset($_POST['form1'])) {

	try {
	
	
		if(empty($_POST['product_name']) || empty($_POST['person']) || empty($_POST['product_info'])||empty($_POST['price'])||empty($_POST['state'])){
			throw new Exception("Field Can't be Empty");
		}
		
		
		
		//$result = mysql_query("insert into tbl_student (st_name,st_roll,st_age,st_email) values('$_POST[st_name]','$_POST[st_roll]','$_POST[st_age]','$_POST[st_email]') ");
		
		$result = mysql_query("update product set product_name='$_POST[product_name]',person='$_POST[person]',product_info='$_POST[product_info]',image='$_POST[image]',price='$_POST[price]',state='$_POST[state]' where id='$id'");
			
		//$success_message = 'Data has been updated successfully.';
		if (!$result)
					  {
					  die('Error: ' . mysql_error());
					  }
		$success_message= "1 record added";
		
	}
	
	catch(Exception $e) {
		$error_message = $e->getMessage();
	}
	
}

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Update Page</title>
</head>
<body>

<h2>Update Data</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>

<?php

$result = mysql_query("select * from product where id='$id'");
while($row=mysql_fetch_array($result)) 
{
	$product_name_old = $row['product_name'];
	$person_old = $row['person'];
	$product_info_old = $row['product_info'];
	$image_old = $row['image'];
	$price_old = $row['price'];
	$state_old = $row['state'];
}

?>


<form action="" method="post">
<table>
	<tr>
		<td>Product Name: </td>
		<td><input type="text" name="product_name" value="<?php echo $product_name_old; ?>"></td>
	</tr>
	<tr>
		<td>Person: </td>
		<td><input type="text" name="person" value="<?php echo $person_old; ?>"></td>
	</tr>
	<tr>
		<td>Product Info: </td>
		<td><input type="textarea" name="product_info" value="<?php echo $product_info_old; ?>"></td>
	</tr>
	<tr>
		<td>Image: </td>
		<td><input type="file" name="image" value="<?php echo  "image file";//$image_old; ?>"></td>
	</tr>
	<tr>
		<td>Price: </td>
		<td><input type="text" name="price" value="<?php echo $price_old; ?>"></td>
	</tr>
	<tr>
		<td>State: </td>
		<td><input type="text" name="state" value="<?php echo $state_old; ?>"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Update" name="form1"></td>
	</tr>
</table>

<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>


<br>
<a href="admin.php">back to previous</a>
	
</body>
</html>