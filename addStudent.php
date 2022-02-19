
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Personal Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- =======================================================
  * Template Name: Personal - v4.7.0
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html"><img src="assets/img/Suadance sin fondo letras dorado.png"></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>graphic designer</span> from New York</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="index.html">About</a></li>
          <li><a class="nav-link" href="index.html">Resume</a></li>
          <li><a class="nav-link" href="index.html">Services</a></li>
          <li><a class="nav-link" href="index.html">Portfolio</a></li>
          <li><a class="nav-link" href="#add">Registrar estudiante</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Add Student ======= -->
  <section id="add" class="add">
    <div class="container">

      <div class="row mt-2">

      <form action="forms/contact.php"  class="form-horizontal" method="post" role="form" style=" width: 35vw; margin-left : 23.5vw;">
        <div class="row">
          <div class="col-md-12 form-group">
            <label>Documento de identidad</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Identificación" required>
            <br>
          </div>
          <div class="col-md-12 form-group">
            <label>Nombres</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nombres" required>
            <br>
          </div>
          <div class="col-md-12 form-group">
            <label>Apellidos</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Apellidos" required>
            <br>
          </div>
          <div class="col-md-12 form-group mt-3 mt-md-0">
              <label>Correo electr&oacute;nico (opcional)</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Correo" required>
            <br>
          </div>
          <div class="col-md-12 form-group mt-3 mt-md-0">
              <label>Tel&eacute;fono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Número de teléfono" required>
            <br>
          </div>
          <div class="col-md-12 form-group mt-3 mt-md-0">
              <label>Direcci&oacute;n</label>
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Dirección" required>
            <br>
          </div>
          <div class="col-md-12 form-group mt-3 mt-md-0">
              <label>Fecha de nacimiento</label>
            <input type="date" class="form-control" name="dateBirthday" id="dateBirthday" required>
            <br>
          </div>
        </div>
        <div class="d-grid gap-2 col-12 mx-auto">
          <button class="btn btn-warning" type="button">Agregar estudiante</button>
        </div>
      </form>

    </div>

    <div class="row mt-2">

      <form action="forms/contact.php"  class="form-horizontal" method="post" role="form" style=" width: 35vw; margin-left : 23.5vw;">
        <div class="row">
          <div class="col-md-12 form-group" style="text-align: center">
            <br>
            <br>
              <h2>Categor&iacute;a</h2>
            <br>
            <select class="form-select" aria-label="Default select example">
              <option selected>Seleccionar categoría</option>
              <option value="1">Junior</option>
              <option value="2">Juvenil</option>
            </select>
            <br>
          </div>
          <div class="col-md-12 form-group">
              <label>Foto del estudiante</label>
              <input type="file" class="form-control" name="porfile" id="file">
              <br>
          </div>
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
            <input type="tel" class="form-control" name="phoneParent" id="phoneParent" placeholder="Número de teléfono">
            <br>
          </div>
        </div>
        <div class="d-grid gap-2 col-12 mx-auto">
          <button class="btn btn-warning" type="button">Finalizar registro</button>
        </div>
        </form>

  </section><!-- End Add Student -->

  <div class="credits">
    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/personal-free-resume-bootstrap-template/ -->
    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>