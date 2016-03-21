<?php
ob_start();
session_start();
include('../config.php');
?>


<?php

if(isset($_POST['form1'])){
	
	
	try{
		if(empty($_POST['username'])){
			throw new Exception("username can't be empty");
		}
		if(empty($_POST['password'])){
			throw new Exception("password can't be empty");
		}
		$password = $_POST['password']; // admin
		$password = md5($password);
		$num=0;
		$result= mysql_query("select * from login where username='$_POST[username]' and password='$password'");
		
		$num= mysql_num_rows($result);
		if($num>0){
			$_SESSION['name']=$_POST['username'];
			header("location:admin.php");
		}else{
				throw new Exception("Invalid Username or Password");
		}
		
		
	}
	catch(Exception $e){
		$error=$e->getMessage();
	}
	
}


?>



<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
 <?php 
 
 
			if(isset($error)){echo $error;}
			if(isset($success_message)){echo $success_message;}

		?>
	<h1>Welcome</h1>
		
		<form class="form" action="" method="post">
			<input type="text" name="username" placeholder="Username" Required>
			<input type="password" name="password" placeholder="Password" Required	>
			<button type="submit" name="form1" id="login-button">Login</button><br>
			<a href="../product.php">Back To The Home</a>
		</form>
		
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
   <!-- <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>-->

    
    
    
  </body>
</html>
