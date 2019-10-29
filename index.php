<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div class="login">
		<a href="services/index.php">Iniciar Sesión</a>
	</div>
	<div class="estructura">
		<div class="envio">
			<form method="post" enctype="multipart/form-data" action="./services/processa.php"> <!--envia los datos recogidos en el formulario a processa.php -->
			<input class="btntxt" type="text" name="titulo" placeholder="titulo" required><br>
			<input class="btnsel" type="file" name="imagen" required><br>
			<input class="btnsub" type="submit" name="enviar">
			</form>
		</div>

	<?php //connexion a la base de datos
		include "./services/connection.php";
	
		//Selección y muestra de datos de la bd
		$result = mysqli_query($conn, "SELECT * FROM `tbl_gallery`");
		// if(!empty($result) && mysqli_num_rows($result)>0){
		echo "<div class='contenedor'>";
			while($row = mysqli_fetch_array($result)){ //devuelve las filas y las guarda en la variable row
			
			echo "<div class='img_nom'>";
			echo "<h2>" .$row['name']."</h2>"; //muestra el nombre de la imagen 
			echo "<img src=".$row['ruta']. " width='100' heigth='100'>"; //muestra la imagen 
			
			echo "</div>";
		} 
	?>
			</div>
	</div>
</body>
</html>