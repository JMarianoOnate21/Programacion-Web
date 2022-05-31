<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>baba</title>
	<link rel="stylesheet" href="../css/headers.css">
	<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/headers/">
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    body{
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='80' height='105' viewBox='0 0 80 105'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='death-star' fill='%230a4ec2' fill-opacity='0.1'%3E%3Cpath d='M20 10a5 5 0 0 1 10 0v50a5 5 0 0 1-10 0V10zm15 35a5 5 0 0 1 10 0v50a5 5 0 0 1-10 0V45zM20 75a5 5 0 0 1 10 0v20a5 5 0 0 1-10 0V75zm30-65a5 5 0 0 1 10 0v50a5 5 0 0 1-10 0V10zm0 65a5 5 0 0 1 10 0v20a5 5 0 0 1-10 0V75zM35 10a5 5 0 0 1 10 0v20a5 5 0 0 1-10 0V10zM5 45a5 5 0 0 1 10 0v50a5 5 0 0 1-10 0V45zm0-35a5 5 0 0 1 10 0v20a5 5 0 0 1-10 0V10zm60 35a5 5 0 0 1 10 0v50a5 5 0 0 1-10 0V45zm0-35a5 5 0 0 1 10 0v20a5 5 0 0 1-10 0V10z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
      background-color: #cdd3f9;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='88' height='24' viewBox='0 0 88 24'%3E%3Cg fill-rule='evenodd'%3E%3Cg id='autumn' fill='%231f0052' fill-opacity='1'%3E%3Cpath d='M10 0l30 15 2 1V2.18A10 10 0 0 0 41.76 0H39.7a8 8 0 0 1 .3 2.18v10.58L14.47 0H10zm31.76 24a10 10 0 0 0-5.29-6.76L4 1 2 0v13.82a10 10 0 0 0 5.53 8.94L10 24h4.47l-6.05-3.02A8 8 0 0 1 4 13.82V3.24l31.58 15.78A8 8 0 0 1 39.7 24h2.06zM78 24l2.47-1.24A10 10 0 0 0 86 13.82V0l-2 1-32.47 16.24A10 10 0 0 0 46.24 24h2.06a8 8 0 0 1 4.12-4.98L84 3.24v10.58a8 8 0 0 1-4.42 7.16L73.53 24H78zm0-24L48 15l-2 1V2.18A10 10 0 0 1 46.24 0h2.06a8 8 0 0 0-.3 2.18v10.58L73.53 0H78z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
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
<body>
	<header class="py-3 mb-3 border-bottom" style="background: #2f3640;">
    <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;">
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none dropdown-toggle" id="dropdownNavLink" data-bs-toggle="dropdown" aria-expanded="false">
          <!--<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>-->
          <img src="../img/images.jpg" width="40" height="32"><use xlink:href="#bootstrap"/>
          <div style="color: white; padding-left: 10px;">
          <?php $user1 = $_GET['user'];
            echo $user1; ?>
          </div>
        </a>
        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownNavLink">
          <li><a class="dropdown-item active" href="#" aria-current="page">Overview</a></li>
          <li><a class="dropdown-item" href="#">Inventory</a></li>
          <li><a class="dropdown-item" href="#">Customers</a></li>
          <li><a class="dropdown-item" href="#">Products</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Reports</a></li>
          <li><a class="dropdown-item" href="#">Analytics</a></li>
        </ul>
      </div>

      <div class="d-flex align-items-center">
        <form class="w-100 me-3" role="search">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>

        <div class="flex-shrink-0 dropdown">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../img/login.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="<?php echo 'perfil.php?user='.$user1; ?>">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" id="cerrar" href="../index.html">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <div class="container-fluid pb-3" >
    <div class="d-grid gap-3" style="grid-template-columns: 1fr 2fr;">
      <div class="bg-light border rounded-3 ava">
        
        <!--cursos-->
        <h2 style="text-align: center; margin-top: 25px; margin-bottom: 25px;">Courses</h2>

        <div class="accordion" id="accordionExample">

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Course #1
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="accordion-body">

                <div class="card" style="width: 34rem;">
                  <img src="../img/curso1.jpg" class="card-img-top" alt="curso" height="150rem">
                  <div class="card-body">
                    <h5 class="card-title">Course title</h5>
                    <p class="card-text">Competencies: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                    <a href="#" class="btn btn-primary" id="miBoton">Register at</a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Course #2
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                
                <div class="card" style="width: 34rem;">
                  <img src="../img/curso2.jpg" class="card-img-top" alt="curso" height="150rem">
                  <div class="card-body">
                    <h5 class="card-title">Course title</h5>
                    <p class="card-text">Competencies: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                    <a href="#" class="btn btn-primary" id="miBoton">Register at</a>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Course #3
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                
                <div class="card" style="width: 34rem;">
                  <img src="../img/curso-2.jpg" class="card-img-top" alt="curso" height="150rem">
                  <div class="card-body">
                    <h5 class="card-title">Course title<</h5>
                    <p class="card-text">Competencies: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                    <a href="#" class="btn btn-primary" id="miBoton">Register at</a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!--tabla de congresos-->
      <div class="bg-light border rounded-3">
        <h2 style="text-align: center; margin-top: 25px;">Congresses</h2>  
         <?php 
          include("../php/conexion.php");
          $consulta=pg_query("SELECT * FROM congresos");

          $registro=pg_fetch_array($consulta);
          echo '<table border class="table table-bordered border-primary">';
           echo '<thead class="thead-dark">
            <tr class = "table-dark">
              <th scope="col">Time</th>
              <th scope="col">Date</th>
              <th scope="col">Rapporteur</th>
              <th scope="col">Activities</th>
            </tr>
          </thead>';
          do{
            $h=$registro['hora'];
            $f=$registro['fecha'];
            $p=$registro['ponente'];
            $a=$registro['actividades'];
            echo "<tr class ='table-info'><td>$h</td> <td>$f</td> <td>$p</td> <td>$a</td> </tr><br/>";
          }while($registro=pg_fetch_array($consulta));
          echo '</table>';
        ?>
      
        <br><br><br><br><br>
      </div>

    </div>
  </div>

    <footer>


        <br>© Copyright 2022 &amp; S.A. de C.V. <br>
        <h4>Ava Corp</h4>
    </footer>

 <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
 <script>
  const boton = document.querySelector("#miBoton");
  boton.addEventListener("click", function(evento){
    // Aquí todo el código que se ejecuta cuando se da click al botón
    alert("You have registered for the course");
    });
</script>
<script>
  const boton1 = document.querySelector("#miBoton2");
  boton1.addEventListener("click", function(evento){
    // Aquí todo el código que se ejecuta cuando se da click al botón
    alert("You have registered for the course");
    });
</script>
<script>
  const boton2 = document.querySelector("#miBoton3");
  boton2.addEventListener("click", function(evento){
    // Aquí todo el código que se ejecuta cuando se da click al botón
    alert("You have registered for the course");
    });
</script>
<script>
  const boton3 = document.querySelector("#cerrar");
  boton3.addEventListener("click", function(evento){
    // Aquí todo el código que se ejecuta cuando se da click al botón
    alert("the session was closed");
    });
</script>
</body>
</html>