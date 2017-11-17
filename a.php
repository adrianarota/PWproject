<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
<link href="header.css" rel="stylesheet" type="text/css"> 

<title>ForumAC</title>
</head>
<body   bgcolor=lightgrey >
  <div class="middle">

<div >
<br>
    <div class = "blocks"><h1 style="color:#666666">Despre site
  </h1></div>
    <div class = "blocks"><div style="color:#333333">
  Lorem ipsum
  </div></div>
   
</div>
</div>
<header class="header">  
  <div class="floating-header-logo" >
  
	<a href="https://en.wikipedia.org/wiki/Adder_(electronics)#Full_adder">
        <img src="circuit.png" width="200" height="102" >
      </a>
    </div>

    <div class="floating-header-menu-item">  
        <p >FAC | forum AC</p>
	</div>	
</header>

   <p class="subheader" >
	<a class="subheader-menu-itemone "   href="a.php">
        Acasa
      </a>
   <a class="subheader-menu-item "  href="b.php">
        Forum
      </a>
  <a class="subheader-menu-item "  href="c.php">
        Resurse
   </a>
     
   	</p>
	
<div class="left-item doi">

 <button onclick="location.href='d.php'" type="button" >Login</button>
 
 </div>

 <div class="left-item trei">

 <button onclick="location.href='nou.php'" type="button" >Cont nou</button>
 </div>
 
  <div class="left-item patru">

 <button onclick="location.href='logout.php'" type="button" >Logout</button>
 </div>
 
 <div class="left-item unu">
  <?php
if(isset($_SESSION['name']))
echo $_SESSION['name'] ;
else
	echo 'Nu esti logat';
?>
 </div>

  
 </body>

