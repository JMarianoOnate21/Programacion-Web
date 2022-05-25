<?php 
  include("conexion.php");

  $user = $_POST['user'];
  $pass = $_POST['password'];

  $consulta = pg_query("SELECT * FROM persona WHERE email ='$user' and password='$pass'");
  $nr = pg_num_rows($consulta);

  if ($nr == 1) {
    //header("Location: pagina.html") redirije a la pagina
    echo 'bienvenido: '.$user;
  }else if($nr == 0){
    echo "usuario y contraseña incorrectas";
  }
?>