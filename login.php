<?php

require 'database.php';
    session_start(); 
    if (isset($_SESSION['user_id'])) {
        header('Location: /Suadance');
      }

    

      if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
        $records = $conn->prepare('SELECT id, usuario, password FROM users WHERE usuario = :usuario');
        $records->bindParam(':usuario', $_POST['usuario']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $message = '';
    
        if (is_array($results) > 0 && password_verify($_POST['password'], $results['password'])) {
          $_SESSION['user_id'] = $results['id'];
          header("Location: /Suadance");
        } else {
          $message = '<script> alert("Lo siento, no se encontraron coincidencias!")</script>';
        }
      }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="assets/css/estiloLogin.css">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/img/Suadance sin fondo negro.ico" rel="logo Suadance">
  </head>
  <body>

  <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <div class="login-box">
      <img src="assets/img/logo sin letras.png" class="avatar" alt="Avatar Image">
      <h1>Iniciar Sesion</h1>

      <form action="login.php" method="POST">

        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuario" required>
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Ingrese Contaseña" required>
        <center>
          <button class="button" value="send" type="submit">Ingresar</button>
        </center>
      </form>
      <img src="assets/img/Suadance sin fondo letras dorado.png" alt="">
      <center>
      <button class="button" type="submit" onclick="location.href='registrarse.php'">Registrarse</button>
      </center>
      
    </div>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
  </body>
</html>