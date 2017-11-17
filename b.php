<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
<link href="header.css" rel="stylesheet" type="text/css"> 

<title>ForumAC</title>
</head><body   bgcolor=lightgrey style="overflow:scroll">
 
 <div class="middle">
	<div>
		<form  action="comment.php" method="post">
			<div style="padding-top:50px">
				<textarea name="comment" style="font-family:sans-serif;font-size:1.2em;width:370px"> </textarea>
			</div>
			
			<button type="submit" class="button" name="intr">
				Intreaba
			</button>

		</form>

	<div style="color:#262984" >
		<br>
		<?php
			if(isset($_SESSION['nolog']))
				{echo 'Nu esti logat!' ;
				unset($_SESSION['nolog']);}
			if(isset($_SESSION['nocom']))
				{echo 'Nu poti posta un mesaj gol!' ;
				unset($_SESSION['nocom']);}

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
				<div style="font-size:25px">
				<form  action="comment.php" method="post">
					<input type="hidden" name="nr" value= "<?php echo $row['nr'];?>"/>
						<?php  
							echo $row["nr"].":" .$row["comment"]."<br>"."<br>";
							echo '<textarea name="rasp" style="font-family:sans-serif;font-size:0.6em;width:370px; height:30px">		</textarea>';
							echo  '<button name="rsp" style="margin-left :20px; background-color:grey; width: 90px;height: 27px;"  >raspunde</button>  ';
							$temp=$row["nr"];
							$sql= "SELECT intr, rasp FROM rasp";
							$res = $connect->query($sql);
							if ($res->num_rows > 0) 
								while($row = $res->fetch_assoc()) {
										if($row["intr"]==$temp)
											echo '<div>'  .$row["rasp"]. '<br> <br> </div>';
								}
		  
							
						?>
		
		</form>
		</div>

		<?php
				}
		?>
		
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

