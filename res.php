<?php
session_start();
?>

<?php

 $connect = new mysqli('localhost', 'root', '', 'ani');

 if($connect->connect_error){
    die("ERROR: Could not connect. ");
 }
 
 
   if (isset($_POST['add'])){
      if(isset($_SESSION['name'])){
        if (isset($_POST['an'])) {
            $an= $_POST['an'];
              if((strlen(trim($an)) != 0)){
				$sql= "INSERT INTO ani (An) VALUES ('$an')";
				if ($connect->query($sql) == TRUE) {  } else 
					{$_SESSION['error']= "error";	}
						}
				else
					$_SESSION['nocom']= "nocom";
			}
		}
		else
	$_SESSION['nolog']= "nolog";
		}
   
    elseif (isset($_POST['addm'])){
			if(isset($_SESSION['name'])){
				if (isset($_POST['mattb'])) {
					$materie= $_POST['mattb'];
					if (isset($_POST['nr']))
						$nr= $_POST['nr'];
					if((strlen(trim($materie)) != 0))
					{
						$sql= "INSERT INTO materii (an, materie) VALUES ('$nr', '$materie')";
						if ($connect->query($sql) == TRUE) {  } else 
						{$_SESSION['error']= "error";	}
					}
					else
						{$_SESSION['nocom']= "nocom";  }
				}
			}else  $_SESSION['nolog']= "nolog";
	}
 
 

		header("Location:resurse.php");


	
?>

