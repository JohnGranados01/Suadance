<?php

require 'logic/database.php';
    session_start();

    if(isset($_SESSION['user_id'])){
        $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE id = :id ');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $user = null;

        if (count($results) > 0) {
            $user = $results;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Academia de Baile SUADANCE</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="assets/js/showForm.js"></script>
  <script type="text/javascript" src="assets/js/permiso_camara.js"></script>
  <script type="text/javascript" src="assets/js/listarEstudiantes.js"></script>
  <script type="text/javascript" src="assets/js/webcam.min.js"></script>

  <!-- Calendar Stuff -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@latest/css/materialdesignicons.min.css">
  <script defer="defer" type="module" src="assets/js/chunk-vendors.d39985fd.js"></script>
  <script defer="defer" type="module" src="assets/js/app.e4155f14.js"></script>
  <link href="assets/css/vuecalendar.css" rel="stylesheet">
  <script defer="defer" src="assets/js/chunk-vendors-legacy.f453de57.js" nomodule></script>
  <script defer="defer" src="assets/js/app-legacy.fc1cb8db.js" nomodule></script>          

  <!-- Favicons -->
  <link href="assets/img/Suadance sin fondo negro.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Alternate CSS Files -->
  <link href="assets/css/calendar.css" rel="stylesheet">
  <link href="assets/css/overlay.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- si esta registrado el usuario, muestra esto -->
  <?php if(!empty($user)):?>
  <!-- ======= Header ======= -->

  <header id="header">
    <div class="container">

      <h1><a href="index.php"><img src="assets/img/Suadance sin fondo letras dorado.png"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2><span>Sistema de registro de estudiantes SDC</span>
      <div class="navfirst"><label class="welcome">Bienvenido <?= $user['usuario'] ?></label></div></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="#add">Registrar estudiante</a></li>
          <li><a class="nav-link" href="#category">Lista de Estudiantes</a></li>
          <li><a class="nav-link" href="#clases">Horarios y Clases</a></li>
          <li><a href="logic/logout.php">Cerrar Sesi&oacute;n</a></li>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <div class="social-links">
        <a href="https://twitter.com/suadance" class="twitter" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/search/top?q=suadance%20compa%C3%B1ia%20de%20danza" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/suadance/?hl=es-la" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
       
      </div>

    </div>
  </header><!-- End Header -->

<!-- ======= Add Student section ======= -->
<section id="add" class="add">
  <div class="container">
    <form class="form-horizontal" action="views/registerStudent.php" method="post" enctype="multipart/form-data" role="form" style=" width: 35vw; margin-left : 23.5vw;">
      <div class="row">
        <div class="col-md-12 form-group" id="cont_webcam" style="display:none">
          <video src="" id="video" playsinline autoplay style="width:480px"></video>
          <canvas id="canvas" name="canvas" width="480px" height="360px"></canvas>
          <center>
            <button type="button" id="capturar" name="captura" onclick="void capturar_foto()">Tomar foto</buttob>
            <button type="button" id="btn_guardar" onclick="void guardar_foto()" >Guardar foto</button>
          </center>
        </div>
        <div class="col-md-12 form-group">
          <div id="my_camera">

          </div>
        </div>
        <div class="col-md-12 form-group">
          <label>Fuente de la foto del estudiante</label>
          <select class="form-select" aria-label="Default select example" name="EntradaFoto" onclick="toggle(this)">
            <option value="Seleccion">Seleccione opci??n</option>
            <option value="camara">C??mara</option>
            <option value="pc">Ordenador</option>
          </select>
        </div>
        <script>
          function toggle(o) {
          var el=document.getElementById('ordenador');
          var e2=document.getElementById('cont_webcam');
          var e3=document.getElementById('mensaje');
          if (o.value=="pc") el.style.display="block";
          if (o.value=="camara") el.style.display="none";
          if (o.value=="Seleccion") el.style.display="none";
          if (o.value=="pc") e2.style.display="none";
          if (o.value=="camara") e2.style.display="block";
          if (o.value=="Seleccion") e2.style.display="none";
          }
        </script>
        <div class="col-md-12 form-group" id="cont_webcam" id="mensaje" style="display:none">
          <center>
           <input class="cuadrofoto" type="button" id="capturar" onclick="void capturar_foto()" value="tomar foto"></input>
            <button type="button" id="btn_guardar" onclick="void guardar_foto()" >Guardar foto</button>

          </center>
        </div>
        <div class="col-md-12 form-group" name="ordenador" id="ordenador"style="display:none">
          <label>Foto del estudiante</label>
          <input type="file" class="form-control" name="porfile" id="file">
          <br>
        </div>
        <div class="col-md-12 form-group">
          <label>Documento de identidad *</label>
          <input type="text" name="id" class="form-control" id="name" placeholder="Identificaci??n" required>
          <br>
        </div>
        <div class="col-md-12 form-group">
          <label>Nombres *</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Nombres" required>
          <br>
        </div>
        <div class="col-md-12 form-group">
          <label>Apellidos *</label>
          <input type="text" name="apellido" class="form-control" id="name" placeholder="Apellidos" required>
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0">
            <label>Correo electr&oacute;nico (opcional)</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Correo">
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0">
            <label>Tel&eacute;fono *</label>
          <input type="number" class="form-control" name="telefono" id="telefono" placeholder="N??mero de tel??fono" required>
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0">
            <label>Direcci&oacute;n *</label>
          <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direcci??n" required>
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0">
          <label>Fecha de nacimiento *</label>
          <input type="date" class="form-control" name="dateBirthday" id="dateBirthday" required>
          <br>
        </div>
      </div>

      <div class="col-md-12 form-group" style="text-align: center">
        <br>
        <br>
        <h4>Categor&iacute;a *</h4>
        <br>
        <select class="form-select" aria-label="Default select example" name="categoria">
          <option value="funny">Funny kids</option>
          <option value="junior">Junior</option>
          <option value="prejuvenil">Prejuvenil</option>
          <option value="juvenilB">Juvenil b??sico</option>
          <option value="juvenilM">Juvenil medio</option>
          <option value="juvenilA">Juvenil avanzado</option>
          <option value="golden">Golden</option>
        </select>
        <br>
      </div>

      <div class="">
        <input type="checkbox" name="check" id="check" value="1" onchange="showContent()"> Requiere datos de acudiente</input>
      </div>

      <div class="row" id="finalizar" style="display: none;">
        <div class="col-md-12 form-group">
          <br>
          <h3>Acudiente</h3>
          <br>
        </div>
        <div class="col-md-12 form-group">
          <label>Nombres</label>
          <input type="text" name="nameParent" class="form-control" id="nameParent" placeholder="Nombres">
          <br>
        </div>
        <div class="col-md-12 form-group">
          <label>Apellidos</label>
          <input type="text" name="lastNameParent" class="form-control" id="lastNameParent" placeholder="Apellidos">
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0">
          <label>Tel&eacute;fono</label>
          <input type="text" pattern="[0-9]+" class="form-control" name="phoneParent" id="phoneParent" placeholder="N??mero de tel??fono">
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 form-group mt-3 mt-md-0" style="text-align: center">
          <br>
          <br>
          <h4>Datos de paquete</h4>
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0">
          <label>Fecha de Inicio *</label>
          <input type="date" class="form-control" name="dateBegin" id="dateComienzo" required>
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0">
          <label>Fecha de Finalizaci&oacute;n *</label>
          <input type="date" class="form-control" name="dateEnd" id="dateFinish" required>
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0" style="align: center">
          <label>Paquete de Clases *</label>
          <select class="form-select" aria-label="Default select example" name = "paquete">
            <option value="4">4 clases</option>
            <option value="6">6 Clases</option>
            <option value="8">8 Clases</option>
            <option value="16">16 Clases</option> 
          </select>
          <br>
        </div>
        <div class="col-md-12 form-group mt-3 mt-md-0">
          <label>Observaciones</label>
          <br>
          <input type="text" class="form-control" name="observaciones" id="observaciones">
          <br>
        </div>
      </div>
      <div class="d-grid gap-2 col-12 mx-auto">
        <br>
        <br>
        <input  class="btn btn-warning" name="Fin_registro" type="submit" onclick="void guardar_foto()" value="Finalizar registro"></input>
      </div>
    </form>
  </div>

</section><!-- End Add Student -->

<!-- Categories Section -->

<section id="category" class="category">
  <div class="container">

    <div class="section-title">
      <h2>Lista de Estudiantes</h2>
      <p>Categorias</p>
    </div>

   

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/categorias/FunnyKids.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <br>
            <a role="button" id="funnyKids" value="FunnyKidsuwu" onclick="selected('1');" href="views/listaFunny.php">Funny Kids</a>
          
          </div>
        </div>
      </div>
        <!--
        <div class="colw_6 wow zoomIn">
          <div class="wrapimg hack960">
            <div class="pic"><img src="assets/img/categorias/FunnyKids.jpg" class="pic-image full-width" alt="Pic"/>
              <a href="funnyKids.php">
              <div class="pic-caption top-to-bottom">
                <h4 class="pic-title">Funny kids</h4>
              </div></a>
            </div>
          </div>
        </div>
   -->
      
   
      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
        <img src="assets/img/categorias/Junior.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
          <br>
          <a role="button" id="junior" onclick="selected('2');" href="views/listaJunior.php">Junior</a>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
        <img src="assets/img/categorias/PreJuvenil.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
          <br>
          <a role="button" id="prejuvenil" onclick="selected('3');" href="views/listaPrejuvenil.php">Pre Juvenil</a>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <br>
        <img src="assets/img/categorias/JuvenilBasico.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
          <br>
          <a role="button" id="juvenilB" onclick="selected('4');" href="views/listaJuvenilB.php">buJuvenil Basico</a>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
        <br>
        <img src="assets/img/categorias/JuvenilIntermedio.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
          <br>
          <a role="button" id="juvenilInt" onclick="selected('5');" href="views/listaJuvenilInt.php">Juvenil Intermedio</a>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
        <br>
        <img src="assets/img/categorias/Compania.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
          <br>
          <a role="button" id="compania" onclick="selected('6');" href="views/listaCompania.php">Compa??ia</a>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="#" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4> </h4>
            <p> </p>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
        <br>
        <img src="assets/img/categorias/Golden.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
          <br>
          <a role="button" id="golden" onclick="selected('6');" href="views/listaGolden.php">Golden</a>
            
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="#" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4> </h4>
            <p> </p>
            
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Categories Section -->

   <!-- ======= Clases Section ======= -->
   <section id="clases" class="clases">

  

    <div class="container">

      <div class="section-title">
        <h2>HORARIOS Y ASISTENCIA</h2>
        <p>CLASES</p>
      </div>
      <noscript><strong>We're sorry but vuecalendar doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript>
      <div id="app"></div>

    </div>

    <div class="section-title">
      <br><br>
      <p>BUSCAR LISTADO DE ASISTENCIA</p>
      <br>
    </div>

    <div class="row">
      <div class="col-md-4"> </div>
      <div class="col-md-3" style="align: center">
          
          <input type="date" class="form-control" name="dateBirthday" id="dateBirthday">
         
      </div>
      <div class="col-md-3" style="align: center">
       
        <button class="btn btn-warning" onclick="location.href='views/listaAsistencia.php'">Buscar</button>
       
    </div>
    
    </div>
  </section><!-- End Clases Section -->
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/listarEstudiantes.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" src="assets/js/takephoto.js"></script>
  
<!-- si no esta registrado el usuario muestra esto -->
<?php else: ?>
  <?php 
      require 'html/home.html';
      ?>
    <?php endif; ?>
</body>
</html>