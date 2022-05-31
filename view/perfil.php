<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<link rel="stylesheet" href="../assets/dist/css/bootstrap.min.css">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

	<style>
		* {
    		box-sizing: border-box;/*tanto como espaciado interno y externo sumen un solo espaciado*/
    		margin: 0;/*no margenes hacia afuera*/
    		padding: 0;/*no espaciados hacia adentro*/
		}
		.btn{
		    cursor: pointer;
		    display: inline-block;
		    border: 0;
		    font-weight: bold;
		    padding: 10px 20px;
		    background-color: #262626;
		    color: #ffffff;
		    font-size: 15px;
		    border: 1px solid #fff;
		    margin-top: 10px;
		}
		footer{
          background: #2f3640;
          color:  #616161;
          font-size: 12px;
          padding: 20px 0px;
          text-align: center;
          padding-bottom: 20px;
    }
	</style>

</head>
<body style="background: url(../img/topicos.jpg) no-repeat center center/cover;">

	<div style="background: #100f1a; color: white; margin: 45px; padding: 50px 100px;">
		<div style="text-align: center;">
			<img class="mb-4 rounded-circle" src="../img/login.jpg" alt="" width="82" height="67">
		</div>

		<h2>Edit profile</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><br>	

		<?php 
		$correo = $_GET['user']; 
		include("../php/conexion.php");
		$consulta=pg_query("SELECT * FROM persona WHERE email='$correo'");
		$registro=pg_fetch_array($consulta);
		$n=$registro['nombre'];
		$a=$registro['apellido'];
		$t=$registro['telefono'];
		$e=$registro['email'];
		$u=$registro['usuario'];
		$p=$registro['password'];

		?>
		<form method="post">
		  <div class="campo row">
		    <div class="col">
		      <label for="inputEmail4">Email</label>
		      <input type="email" class="form-control" placeholder="Email" name="e" value="<?php echo $e; ?>">
		    </div>


		    <div class="col">
		      <label for="inputPassword4">Password</label>
		      <input type="password" class="form-control"  placeholder="Password" name="p" value="<?php echo $p; ?>">
		    </div>
		  </div><br>

		<div class="campo row">
			
		
		   <div class="col">
		      <label>User</label>
		      <input type="text" class="form-control" placeholder="User name" name="u" value="<?php echo $u; ?>">
		    </div>

		    <div class="form-group col-md-2">
		      <label for="inputZip">Phone</label>
		      <input type="text" class="form-control" placeholder="Phone: ej 444" name="t" value="<?php echo $t; ?>">
		    </div>
		</div><br>

		  <div class="campo row">
		  	<div class="col">
			    <label >First name</label>
			    <input type="text" class="form-control" placeholder="First name" name="n" value="<?php echo $n; ?>">
			</div>
			<div class="col">
			    <label >Last name</label>
			    <input type="text" class="form-control" placeholder="Last name" name="a" value="<?php echo $a; ?>">
			</div>
		  </div><br>
		  
		  
		   

		    <div style="text-align: center;">
		    	<button type="submit" class="btn" name="actualizar">Update</button>
		  		<a href="<?php echo 'inicio-sesion-es.php?user='.$correo; ?>" class="btn">Cancel</a>
		    </div>
		</form>
		
	</div>

	<?php if(isset($_POST['actualizar'])){
		$n1=$_POST['n'];
		$a1=$_POST['a'];
		$t1=$_POST['t'];
		$e1=$_POST['e'];
		$u1=$_POST['u'];
		$p1=$_POST['p'];
		pg_query("UPDATE persona SET nombre='$n1', apellido='$a1', telefono='$t1', email='$e1', usuario='$u1', password='$p1'  WHERE email='$correo'");
		echo "<script>alert('has been successfully updated'); location='perfil-es.php?user=$e1'</script>";
	} ?>
	
	<footer>
	  <br>© Copyright 2022 &amp; S.A. de C.V. <br>
	  <h4>Ava Corp</h4>
	</footer>
</body>
</html>