<?php  
include("conexion.php");

if ($_POST) {
	$n=$_POST['name'];
	$a=$_POST['apellido'];
	$t=$_POST['tel'];
	$e=$_POST['email'];
	$u=$_POST['user'];
	$p=$_POST['pwd'];
	pg_query("insert into persona(nombre, apellido, telefono, email, usuario, password) values ('$n','$a','$t','$e','$u','$p')");
	echo "<script>alert('Registro exitoso!'); location='../es/login.html'</script>";
}
?>