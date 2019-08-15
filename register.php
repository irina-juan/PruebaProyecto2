<?php  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Rozha+One&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maxim-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link rel="stylesheet" href="log1.css">
    <title>Registro</title>
  </head>
  <body>

    <header>
      <?php
      include("navBar.php");
      ?>

    </header>
    <div >


          <form class="formulario">
            <h1>Registrate</h1>
            <div class="contenedor">
              <div class="input-contenedor">
                <i class="fas fa-user-check icon"></i>
                <input type="text" placeholder="Nombre Completo">
              </div>
              <div class="input-contenedor">
                <i class="far fa-envelope icon"></i>
                <input type="text" placeholder="mail">
              </div>
              <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="contraseña">
              </div>
              <input type="submit" name="" value="Registrate" class="button">
              <p> Aceptas los terminos y condiciones de B&M.</p>
              <label><input type="checkbox" id="cbox1" value="acepto"> Si</label>

              <input type="checkbox" id="cbox2" value="noacepta"> <label for="cbox2">No</label>

              <p> Ya tienes una cuenta?<a class="link" href="login.html">Iniciar Sesion</a></p>
            </div>
          </form>
    </div>




      <footer>
          <?php
          include("footer.php");
           ?>
    </footer>
  </body>
</html>
