<?php
$conn = mysqli_connect('localhost','root','','gallery');

if (mysqli_connect_errno()){ //devuelve el codigo del error 
	die("Error al conectarnos a la base de datos: ". mysqli_connect_error()); //devuelve la descripcion del error	
}else{
  mysqli_set_charset($conn,"utf8"); // establece el formato "utf-8"
}

?>
