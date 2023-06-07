<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
    <link rel="stylesheet" href="stylesregistro.css">
</head>
<body>
    <section id="register">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto">
              <div class="card">
                <div class="card-header bg-white text-center">
                  <h3 class="mb-0" style="color: rgb(6, 6, 6);">Registro</h3>
                  <?php
                  include("conexion.php");
                  include("controlador_usuarios.php")
                  ?>
                </div>
                <div class="card-body">
                  <form action="" method="post">
                  <div class="form-group">
                      <label for="register-nombre" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>nombre</h4></label>
                      <input type="nombre" name="nombre" id="nombre" class="form-control" required>
                    </div>
                  <div class="form-group">
                      <label for="register-email" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>Correo electrónico</h4></label>
                      <input type="email" name="correo" id="correo" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="register-email" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>Contraseña</h4></label>
                      <input type="password" name="contraseña" id="contraseña" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="register-email" style="color: white; text-shadow: -1px -1px 0 black, 1px -1px 0 black, -1px 1px 0 black, 1px 1px 0 black;"><h4>Confirmar contraseña</h4></label>
                      <input type="password" name="confirmarcontraseña"id="confirmarcontraseña" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-purple" type="submit" name="registrarse"><a href="login.php">Registrarse</a></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</body>
</html>
