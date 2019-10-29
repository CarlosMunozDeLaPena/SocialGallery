<!DOCTYPE html>
<html>
<head>
	<title>Mi sitio</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script type="text/javascript" src="codi.js"></script>
</head>
<body style="background-image:url(wallpaper1.jpg); background-size:100% 100%; background-attachment:fixed;">
	<div style="text-align: right;">
	<?php
	include "./header.php";
	?>	
	</div>
	<h1>Sitio personal de <?php echo $_SESSION['nombre']; ?></h1>
	
	<div class="estructura">

		<div class="envio">
			<p class="mensaje" id="mensaje"></p>
			<form method="post" enctype="multipart/form-data" action="../services/processa.php" onsubmit="return subirimagen()"> <!--envia los datos recogidos en el formulario a processa.php -->
			<input class="btntxt" type="text" name="titulo" placeholder="titulo" id="titulo"><br>
			<input class="btnsel" type="file" name="imagen" id="imagen"><br>
			<input class="btnsub" type="submit" name="enviar">
			</form>
		</div>

	<?php //connexion a la base de datos
		include "./services/connection.php";
		$id_user=$_SESSION['id'];
		$sq="SELECT tbl_gallery.name, tbl_gallery.ruta, tbl_gallery.date FROM tbl_gallery WHERE id_usuario='$id_user'";
		//Selección y muestra de datos de la bd
		$result = mysqli_query($conn, $sq);
		// if(!empty($result) && mysqli_num_rows($result)>0){
		echo "<div class='contenedor'>";
			while($row = mysqli_fetch_array($result)){ //devuelve las filas y las guarda en la variable row
			
			echo "<div class='img_nom'>";
			echo "<h2>" .$row['name']."</h2>"; //muestra el nombre de la imagen 
			echo "<img class='img' src=".$row['ruta']. " width='100' heigth='100'>"; //muestra la imagen 
			
			echo "</div>";
		} 
	?>
			</div>
	</div>
</body>
</html>