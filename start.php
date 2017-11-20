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
  <div class="middle" style="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">

<div >
<br>
    <div class = "blocks">
	<h1 style="margin-left:70px;color:#666666">Despre site</h1>
  </div>
  
    <div class = "blocks">
	<h2 style="margin-left:70px;color:#666666">Ce este FAC?</h2>
  </div>
    <div class = "blocks">
	<div style="margin-left:70px;color:#333333">Un loc unde studentii pot schimba informatii legate de cursuri, examene sau laboratoare din cadrul facultatii de automatica si calculatoare din Timisoara</div>
  </div>
    <div class = "blocks">
	<h2 style="margin-left:70px;color:#666666">De unde vine numele de "FAC"?</h2>
  </div>
    <div class = "blocks">
	<div style="margin-left:70px;color:#333333">Numele vine de la titlul intreg al site-ului, "Forum AC". De asemenea, este o referinta la Full Adder Cell (pentru mai multe informatii, click pe poza din stanga sus)</div>
 </div>
  <div class = "blocks">
	<h2 style="margin-left:70px;color:#666666">Cine poate folosi site-ul?</h2>
  </div>
    <div class = "blocks">
	<div style="margin-left:70px;color:#333333">Oricine poate vizualiza materialele sau intrebarile din forum; pentru a pune sau raspunde la intrebari sau pentru a adauga informatii noi trebuie sa iti creezi un cont.</div>
  </div>
   <div class = "blocks">
	<h2 style="margin-left:70px;color:#666666">Care este politica site-ului?</h2>
  </div>
    <div class = "blocks">
	<div style="margin-left:70px;color:#333333">Incurajam studentii sa raspunda cat mai corect la intrebarile puse de colegii lor si sa nu publice informatii eronate cu buna -stiinta</div>
  </div>
  
   
   
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
	<a class="subheader-menu-itemone "   href="start.php">
        Acasa
      </a>
   <a class="subheader-menu-item "  href="forum.php">
        Forum
      </a>
  <a class="subheader-menu-item "  href="resurse.php">
        Resurse
   </a>
     
   	</p>
<div class="left-item doi">

 <button onclick="location.href='logare.php'" type="button" >Login</button>
 
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
 
  </div>
 </body>

