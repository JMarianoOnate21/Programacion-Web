 <?php 
  include("conexion.php");
  $consulta=pg_query("SELECT * FROM congresos");

  $registro=pg_fetch_array($consulta);
  echo '<table border>';
  do{
    $h=$registro['hora'];
    $f=$registro['fecha'];
    $p=$registro['ponente'];
    $a=$registro['actividades'];
    echo "<tr><td>$h</td> <td>$f</td> <td>$p</td> <td>$a</td> </tr><br/>";
  }while($registro=pg_fetch_array($consulta));
  echo '</table>';
?>

 