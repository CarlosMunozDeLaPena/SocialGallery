<?php
$conn = mysqli_connect('localhost','root','','gallery');
if($conn){
	echo "<br>";
}else{
	echo "Ha fallado la conexión<br>";
}
?>