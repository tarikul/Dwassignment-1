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
	
	$result = mysql_query("delete from product where id='$id'");
		
	header('location: admin.php');
}
else {
	header('location: admin.php');
}