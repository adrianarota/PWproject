<?php
session_start();
?>


<?php

 $connect = new mysqli('localhost', 'root', '', 'ani');

if($connect->connect_error){
    die("ERROR: Could not connect. ");
}
  
if(isset($_POST['save']))
{
	if(isset($_SESSION['name'])){
		if(isset($_POST['cod']))
		{
			$cod=$_POST['cod'];
			if(isset($_POST['content']))
			{	
				$content=$_POST['content'];
				$sql= "INSERT INTO mat (codm, material) VALUES('$cod', '$content') ON DUPLICATE KEY UPDATE material='$content'";
				if ($connect->query($sql) == TRUE) {  } else 
				{	
				  $_SESSION['error']= "error";	
				}
			}
		}
	}else
		$_SESSION['nolog']= "nolog";
}
	header("Location:resurse.php");

?>
