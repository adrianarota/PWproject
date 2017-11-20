<?php

session_start();

?>

<html>

	<head>

	
	<link href="login.css" rel="stylesheet" type="text/css">

	<link href="header.css" rel="stylesheet" type="text/css">	
	</head>

	<body style="background-color:grey">
		<?php
			if(isset($_POST['materie']))
				{$materie=$_POST['materie'];
					echo '<h1 style="color:lightgrey" >'. $materie . ' </h1>';
				}
	
			$connect = new mysqli('localhost', 'root', '', 'ani');
			
			if($connect->connect_error){
				die("ERROR: Could not connect. ");
			}
		?>

		<div class="container" style="background-color:lightgrey">
		<form action="save.php" method ="post">

		<textarea name="content" style="margin-left:65px;font-family:sans-serif;font-size:1.2em;width:700px; height:700px;">
			<?php 	
				if(isset($_POST['cod']))
					$cod=$_POST['cod'];
						$sql= "SELECT material FROM mat WHERE codm=$cod";
						$result= $connect->query($sql);
						if($result->num_rows>0)
							{	while($row=$result->fetch_assoc())
								{
									echo  $row["material"];
								}
							}						
	
			?>
		</textarea>
		 <img src="info.jpg" style="position:absolute" width="700px" height="690px" >	

<div>
			<input type="hidden" name="cod" value= "<?php echo 	$cod;?>"/>
			
			<button style= "margin-left:60" type="submit" name="save"> Modifica </button>
		<?php	if(isset($_SESSION['nolog']))
				{echo 'Nu esti logat!' ;
				unset($_SESSION['nolog']);}
			if(isset($_SESSION['error']))
				{echo 'Nu s-a putut realiza cererea!' ;
				unset($_SESSION['error']);}
		?>
</div>

</form>
  
</div>


</body>
</html>
