<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>

<link href="login.css" rel="stylesheet" type="text/css"> 
</head>
<style>

</style>
<body style="background-color:grey">
<link href="header.css" rel="stylesheet" type="text/css"> 

<h1 style="color:lightgrey" >Login </h1>

<form  action="log.php" method="post">
  
  <div class="container" style="background-color:lightgrey">
<div>   
   <label style="padding-right:17px; font-size:20px"><b>Nume</b></label>
    <input type="text" placeholder="Numele de utilizator" name="Name" required>
</div>
    <label style="padding-right:14px; font-size:20px"><b>Parola</b></label>
    <input  type="password" placeholder="Parola" name="Password" required>
<div>        
    <button type="submit" class="button" >Login</button>
	 <button onclick="window.history.back()"  class="cancelbtn">Anuleaza</button>
 <button onclick="location.href='nou.php'"  class="button">Cont nou</button>
 <div>
  <?php
if(isset($_SESSION['error'])){
echo "Parola sau nume de utilizator gresit!!!" ;
unset($_SESSION['error']);}

?>
</div>
 </div>	

 
  </div>

</form>

</body>
</html>
