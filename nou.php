<?php

session_start();

?>

<!DOCTYPE html>
<html>
<style>



</style>
<body style="background-color:grey">
<link href="header.css" rel="stylesheet" type="text/css"> 

<h1 style="color:lightgrey" >Cont nou</h1>

<form  action="signup.php" method="post">
  
  <div class="container" style="background-color:lightgrey">
<div>   
   <label style="padding-right:15px; font-size:20px"><b>Nume</b></label>
    <input type="text" placeholder="Numele de utilizator" name="Name" required>
</div>
    <label style="padding-right:15px; font-size:20px"><b>Email</b></label>
    <input  type="email" placeholder="Email" name="Email" required>
<div>  
</div>
    <label style="padding-right:15px; font-size:20px"><b>Parola</b></label>
    <input  type="password" placeholder="Parola" name="Password" required>
<div>   
 
</div>
    <label style="padding-right:15px; font-size:20px"><b>Parola</b></label>
    <input  type="password" placeholder="Reintrodu parola" name="Password2" required>
<div>   
     
    <button type="submit">Creeaza</button>
	 <button type="button" onclick="window.history.back()" class="cancelbtn">Anuleaza</button>
 <div>
  <?php
if(isset($_SESSION['error'])){
echo "Parolele nu se potrivesc!!!" ;
unset($_SESSION['error']);}

?>
</div>
	 </div>	
   
  </div>

</form>

</body>
</html>
