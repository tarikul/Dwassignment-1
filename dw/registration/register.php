<?php
include("../config.php");

?>
<?php
if(isset($_POST['submit'])){
	try{
		if(empty($_POST['user_name'])){
			throw new Exception("Name Field Can't be empty");
		}
		if(empty($_POST['user_email'])){
			throw new Exception("Email Field can't be empty");
		}
		if(empty($_POST['user_password'])){
			throw new Exception("Password Field can't be empty");
		}		
		if(empty($_POST['user_age'])){
			throw new Exception("Age Field can't be empty");
		}
		if(empty($_POST['user_bio'])){
			throw new Exception("Biography Field can't be empty");
		}
		if(empty($_POST['user_per'])){
			throw new Exception("Person Field can't be empty");
		}
		if(empty($_POST['user_country'])){
			throw new Exception("Country Field can't be empty");
		}
		
		$user_password=$_POST['user_password'];
		$user_password=md5($user_password);
		
		
		//$country=$_POST['user_country'];
		$result="INSERT INTO registration (username,email,password,age,biography,person,country) VALUES ('$_POST[user_name]','$_POST[user_email]','$user_password','$_POST[user_age]','$_POST[user_bio]','$_POST[user_per]','$_POST[user_country]')";
		//$resul=mysql_query($result,$conn);
		if (!mysql_query($result,$con))
					  {
					  die('Error: ' . mysql_error());
					  }
		$success_message= "1 record added";
		
		
		
		
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
        <title>Registration</title>
        <link rel="stylesheet" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <form action="" method="post">
      
        <h1>Registration</h1>
        <?php 
			if(isset($error)){echo $error;}
			if(isset($success_message)){echo $success_message;}

		?>
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
          
          <label>Age:</label>
          <input type="radio" id="under_13" value="under_13" name="user_age"><label for="under_13" class="light">Under 13</label><br>
          <input type="radio" id="over_13" value="over_13" name="user_age"><label for="over_13" class="light">13 or older</label>
        </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio"></textarea>
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
        <button type="submit" name="submit">Register</button>
		<a href="../product.php">Back To The Home</a>
      </form>
      
    </body>
</html>