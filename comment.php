<?php
 
session_start();
 ?>


<?php
  $connect = new mysqli('localhost', 'root', '', 'comment');
 /* Attempt to connect to MySQL database */
 
 // Check connection
 if($connect->connect_error){
     die("ERROR: Could not connect. ");
 }
 
 if(isset($_SESSION['name'])){
 $Name= $_SESSION['name'];
    if (isset($_POST['intr'])) {
        $comment= $_POST['comment'];
 if((strlen(trim($comment)) != 0)){
 $sql= "INSERT INTO c (id,comment) VALUES ('$Name', '$comment')";
 if ($connect->query($sql) == TRUE) {  } else 
        	{$_SESSION['error']= "error";	}
 }
 else
 		$_SESSION['nocom']= "nocom";
 
     }
 
 
 
     elseif (isset($_POST['rsp'])) {
        if(isset($_POST['nr']))
 	   $nr= $_POST['nr'];
    
 	  if(isset($_POST['rasp']))
 	  {
 		   $rasp =$_POST['rasp'];
 
 	  }
 		   
 		   if((strlen(trim($rasp)) != 0))
 
 {
 $sql= "INSERT INTO rasp (intr,rasp) VALUES ($nr, '$rasp')";
 if ($connect->query($sql) == TRUE) {  } else 
        	{$_SESSION['error']= "error";	}
 }
 else
 	$_SESSION['nocom']= "nocom";
     }
 }else
 	$_SESSION['nolog']= "nolog";
 
 		 
 
		header("Location:forum.php");

?>
