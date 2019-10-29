<?php
 include "./connection.php";

 //insertar en la bd y mover la imagen a la carpeta
 
 $titulo = $_REQUEST ['titulo'];
 $fecha = date('Y-m-d');
 $destination = "../web/gallery/".basename($_FILES['imagen']['name']);
 session_start();
 $id_user=$_SESSION['id'];


 if(move_uploaded_file($_FILES['imagen']['tmp_name'], $destination)) { //movemos el archivo 
 		//insertamos el archivo en la base de datos
 		$query = "INSERT INTO tbl_gallery(name,ruta,date, id_usuario) VALUES ('$titulo','$destination', '$fecha', '$id_user')";
 		echo $query;
 		mysqli_query($conn,$query);
 		header("Location: ../sesiones/misitio.php");
 	}else{
 		echo "Error!!";
 		echo "<a href='../sesiones/misitio.php/'> HOME </a>";

 	}
 ?>
 
