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
$Password2= $_POST['Password2'];

if($Password!=$Password2){
	$_SESSION['error']= "error";		 
header("Location:nou.php");}
else
{

$Email= $_POST['Email'];

$sql= "INSERT INTO user_info VALUES ('$Name', '$Email', '$Password')";
if ($connect->query($sql) == TRUE) {
      
    } else 
       	{$_SESSION['error']= "error";
		 
	}
}

		header("Location:nou.php");


?>