<?php 
  include("conexion.php");

  $user = $_POST['user'];
  $pass = $_POST['password'];

  $consulta = pg_query("SELECT * FROM persona WHERE email ='$user' and password='$pass'");
  $nr = pg_num_rows($consulta);

  if ($nr == 1) {
    
    header("Location: ../view/inicio-sesion-es.php?user=$user"); /*redirije a la pagina*/

  }else if($nr == 0){
    echo "<script>alert('error al iniciar sesion, contraseña o usuario incorrecto'); location='../es/login.html'</script>";
  }
?>