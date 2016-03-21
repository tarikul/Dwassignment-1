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
if(isset($_POST['form1'])) {

	try {
	
		if(empty($_POST['product_name']) || empty($_POST['person']) || empty($_POST['product_info'])||empty($_POST['price'])||empty($_POST['state'])){
			throw new Exception("Field Can't be Empty");
		}
		//$result=mysql_query("show table status like 'porduct'");
		//$num=mysql_affected_rows($result);
		//$new_id=$rows
		
		
		/*$up_filename=$_FILE['image']["name"];
		$file_basename=substr($up_filename,0,strripos($up_filename,'.'));
		$file_ext=substr($up_filename,strripos($up_filename,'.'));
		
		$filename=$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],"upload/".$filename);
		

		$target_dir = "upload/";
		$target_file = $target_dir . basename($_FILES["up_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
			$check = getimagesize($_FILES["up_image"]["tmp_name"]);
			if($check !== false) {
				echo "File is an image - " . $check["mime"] . ".";
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}*/

		
		$file_name = $_FILES['up_image']['name'];
		$file_tmp =$_FILES['up_image']['tmp_name'];
		move_uploaded_file($file_tmp,"upload/".$file_name);
		
		
		
		
		$result = mysql_query("insert into product (product_name,person,product_info,image,price,state) values('$_POST[product_name]','$_POST[person]','$_POST[product_info]','$file_name','$_POST[price]','$_POST[state]') ");
		
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
	<title>Data Insert Page</title>
</head>
<body>

<h2>Insert Data</h2>

<?php  
if(isset($error_message)) {echo $error_message;}
if(isset($success_message)) {echo $success_message;}
?>

<br>


<form action="" method="post" enctype="multipart/form-data">
<table>
	<tr>
		<td>Product Name: </td>
		<td><input type="text" name="product_name" ></td>
	</tr>
	<tr>
		<td>Person: </td>
		<td><input type="text" name="person" ></td>
	</tr>
	<tr>
		<td>Product Info: </td>
		<td><input type="textarea" name="product_info" ></td>
	</tr>
	<tr>
		<td>Image: </td>
		<td><input type="file" name="up_image" /></td>
	</tr>
	<tr>
		<td>Price: </td>
		<td><input type="text" name="price" ></td>
	</tr>
	<tr>
		<td>State: </td>
		<td><input type="text" name="state"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Add Product" name="form1"></td>
	</tr>
</table>



</form>


<br>
<a href="admin.php">back to previous</a>
	
</body>
</html>