<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link href="header.css" rel="stylesheet" type="text/css"> 

<title>ForumAC</title>
</head><body   bgcolor=lightgrey  >
 
 <div class="middle" style="width:45%;font-family:'Palatino Linotype', 'Book Antiqua', Palatino, serif; word-wrap: break-word;">
	<div>
		<form  action="comment.php" method="post">
			<div style="padding-top:50px">
				<textarea name="comment" style="margin-left:65px;font-family:sans-serif;font-size:1.2em;width:370px"> </textarea>
			
			</div>
			
			<button type="submit" style="margin-left:65px;" class="button" name="intr">
				Intreaba
			</button>

		</form>
 
	<div style="color:#262984" >
		<br>
		 <ol>
		<ul>
		<div style="margin-left:20px; font-size:25px">
		<?php
			if(isset($_SESSION['nolog']))
				{echo 'Nu esti logat!' ;
				unset($_SESSION['nolog']);}
			if(isset($_SESSION['nocom']))
				{echo 'Nu poti posta un mesaj gol!' ;
				unset($_SESSION['nocom']);}
			if(isset($_SESSION['error']))
				{echo 'Nu s-a putut realiza cererea!' ;
				unset($_SESSION['error']);}
				
				
			?>
			</div><?php
			$connect = new mysqli('localhost', 'root', '', 'comment');

			if($connect->connect_error){
				die("ERROR: Could not connect. ");	
				}

			$sql= "SELECT nr, comment FROM c";
			$result = $connect->query($sql);

			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc())
				{
        
		?>   
 

		<br>
				<div style="font-size:30px">
				<form  action="comment.php" method="post">
					<input type="hidden" name="nr" value= "<?php echo $row['nr'];?>"/>
						<?php  
							echo '<li style="font-size:30px">' .$row["comment"]. "<br></li>";
							echo '<textarea name="rasp" style="font-family:sans-serif;font-size:0.6em;width:370px; height:20px">		</textarea>';
							echo  '<button name="rsp" style="margin-left :20px; background-color:grey; width: 90px;height: 27px;"  >Raspunde</button>  ';
							$temp=$row["nr"];
							$sql= "SELECT intr, rasp FROM rasp WHERE $temp=intr";
							$res = $connect->query($sql);
							?>
							<ul>
						<?php
							if ($res->num_rows > 0) 
								while($row = $res->fetch_assoc()) {
											echo '<li style="margin-left:40px; font-size:22px">'  .$row["rasp"]. '<br> <br> </li>';
								}
		  
							
						?>
							</ul>
		</form>
		</div>

		<?php
				}
				

		?>
		 </ul>
			</ol>
		</form>
		</div>

		<?php
 
	}
	
     else 
       	{$_SESSION['error']= "error";
		 
	}
			$connect->close();
?>
</div>
 
</div>
     <div class="middle" style="overflow:scroll;display:block;margin-left:46%;width:50%;background-color:grey">
 
  <div>   <img id="image" src="harta-campus.jpg" width="450px" height="450px" >	 </div> 
   <div>   <img id="image" src="3.jpg" width="450px" height="450px" >	 </div>
     <div> <img id="image" src="1.jpg" width="450px" height="450px" >	 </div> 

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

 
 
 </body>

