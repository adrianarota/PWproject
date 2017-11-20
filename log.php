<?php
session_start();
?>

<?php

 $connect = new mysqli('localhost', 'root', '', 'login');
/* Attempt to connect to MySQL database */

// Check connection
if($connect->connect_error){
    die("ERROR: Could not connect. ");
}

$Name= $_POST['Name'];
$Password= $_POST['Password'];

$sql= "SELECT Name FROM user_info WHERE Name='$Name' AND Password='$Password'";

$result= $connect->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc())
	{$_SESSION['name']= $Name;
		 header("Location:a.php");	
	}
	
}
else{
	$_SESSION['error']= "Error";
	  header("Location:logare.php");
}?>

