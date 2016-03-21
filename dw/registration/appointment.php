<?php
include("../config.php");

if(isset($_REQUEST['id'])) {
	$id = $_REQUEST['id'];
}
else {
	header('location: ../product.php');
}

?>
<?php
if(isset($_POST['submit'])){
	try{
		if(empty($_POST['user_name'])){
			throw new Exception("Name Field Can't be empty");
		}
		
		if(empty($_POST['user_password'])){
			throw new Exception("Password Field can't be empty");
		}		
		if(empty($_POST['appointment_date'])){
			throw new Exception("Date Field can't be empty");
		}
		
		
		if(empty($_POST['user_per'])){
			throw new Exception("Person Field can't be empty");
		}
		if(empty($_POST['user_country'])){
			throw new Exception("Country Field can't be empty");
		}
		$user_password=$_POST['user_password'];
		$user_password=md5($user_password);
		
		$result=mysql_query("SELECT * from registration where username='$_POST[user_name]' and password='$user_password'");
		$num= mysql_num_rows($result);
		
		if($num>0){
			$result="INSERT INTO appointment (username,person,country,date,time,product_id) VALUES ('$_POST[user_name]','$_POST[user_per]','$_POST[user_country]','$_POST[appointment_date]','$_POST[appointment_time]','$id')";
			if (!mysql_query($result,$con))
					  {
					  die('Error: ' . mysql_error());
					  }
			$success_message= "Appointment record added";
		}else{
				header("location:registration.php");
		}
		
		
		//$country=$_POST['user_country'];
		
		//$resul=mysql_query($result,$conn);
		
		
		
		
	}
	catch(Exception $e){
		$error=$e->getMessage();
	}
	
}


?>







<!doctype html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Appointment</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="" method="post">
      
        <h1>Appointments</h1>
        <?php 
			if(isset($error)){echo $error;}
			if(isset($success_message)){echo $success_message;}

		?>
        <fieldset>
          <legend><span class="number">1</span>Provide Your Information</legend>
          <label for="name">UserName:</label>
          <input type="text" id="name" name="user_name">
          
          
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
		  <label for="appointment">Date:</label>
          <input type="date" id="appointment" name="appointment_date">
		  <label for="appointment">Time:</label>
          <input type="time" id="appointment" name="appointment_time">
          
        </fieldset>
        
       
        <fieldset>
        <label for="job">Person:</label>
        <select id="job" name="user_per">
          <optgroup label="Person">
            <option value="Men">Men</option>
            <option value="Women">Women</option>           
          </optgroup>
          
        </select>
        
          <label>Country:</label>
          <input type="checkbox" id="development" value="London" name="user_country"><label class="light" for="development">London</label><br>
            <input type="checkbox" id="design" value="Paris" name="user_country"><label class="light" for="design">Paris</label><br>
          <input type="checkbox" id="business" value="NewYork" name="user_country"><label class="light" for="business">New York</label>
        
        </fieldset>
        <button type="submit" name="submit">Appointment</button>
		<a href="../product.php">Back To The Home</a>
      </form>
      
    </body>
</html>