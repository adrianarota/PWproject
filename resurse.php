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
<div class="middle" style="width:45%;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;">
   <div style="padding-top:50px">

<form action="res.php" method="post">
	
	<textarea name="an" style="font-family:sans-serif;font-size:0.7em;width:250px; margin-left:80px; height:20px"> </textarea>
		  <button type="submit" class="button" name="add"  style="width: 90px;height: 27px;">
			Adauga an
			</button>	
<br><br>
			</form>
  <div style="margin-left:80px; font-size:25px; color: #262984">
  <?php
  if(isset($_SESSION['nolog']))
				{echo 'Nu esti logat!' ;
				unset($_SESSION['nolog']);}
			if(isset($_SESSION['nocom']))
				{echo 'Nu poti posta un mesaj gol!' ;
				unset($_SESSION['nocom']);}
  ?>
  </div>
  
  
  <ol style="font-size:35px; color:#262984" >
 <ul >
<?php
	

 $connect = new mysqli('localhost', 'root', '', 'ani');

if($connect->connect_error){
    die("ERROR: Could not connect. ");
}

	$sql= "SELECT nr, An FROM ani ";

	$result= $connect->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			echo '<li > '.  $row["An"].'  </li>';
			?>
			
			<form action="res.php" method="post">
			<input type="hidden" name="nr" value= "<?php echo $row['nr'];?>"/>
			
			<textarea name="mattb" style="font-family:sans-serif;font-size:0.6em;width:250px; height:20px"> </textarea>
		  <button type="submit" class="button" name="addm"  style="width: 100px;height: 27px; background-color:grey">
			Adauga materie
			</button>
			</form>
			<?php
			echo '<ul>';
				$temp=$row["nr"];
				$sql= "SELECT  materie, cod FROM materii WHERE $temp=an";
				$res = $connect->query($sql);
				if ($res->num_rows > 0) 
				while($row = $res->fetch_assoc()) {
					
					?>	
				<form action="materiale.php" method="post">
					<input type="hidden" name="materie" value= "<?php echo $row['materie'];?>"/>
					<input type="hidden" name="cod" value= "<?php echo $row['cod'];?>"/>
				
				<li > <button style ="font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif;font-size: 0.8em;width:500px; text-align: left;color:#262984;background: none;margin: 0;padding: 0;border: none;cursor: pointer;-moz-user-select: text;" type="submit"> <?php echo $row['materie'];?> <br> </button></li>
					
				
				</form>
				
					<?php
					

				}
			echo '</ul>';
	}
	
}
else{
	$_SESSION['error']= "Error";
}


?>
 
  
 </ul>
</ol>

			</div>
 
			</div>
  <div class="middle" style="overflow:scroll;display:block;margin-left:46%;width:50%;background-color:grey">
  <div> <img id="image" src="4.jpg" width="450px" height="450px" >	 </div> 
 
  <div>   <img id="image" src="2.jpg" width="450px" height="450px" >	 </div>
 <div>   <img id="image" src="5.jpg" width="450px" height="450px" >	 </div>  
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

