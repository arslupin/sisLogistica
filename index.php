<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Logistica UAP</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.png" />
  </head>
  <body>
    <section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="min-height: 100vh; background-size: cover; background-image: url(images/fondo.jfif);">
        <div class="container-fluid">
          <div class="row  justify-content-center align-items-center d-flex-row text-center h-100">
            <div class="col-12 col-md-4 col-lg-3   h-50 ">
              <div class="card shadow">
                <div class="card-body mx-auto">
                <img class="mb-4" src="images/logologin.png" alt="" width="168" height="34">
                  <h4 class="card-title mt-3 text-center">Sistema Logistica UAP</h4>
                  <form action="login.php" method="post">
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="bi bi-envelope-at"></i> </span>
                      </div>
                      <input name="mail" class="form-control" placeholder="Correo electronico" type="email">
                    </div>
                    <div class="form-group input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="bi bi-key"></i> </span>
                      </div>
                      <input class="form-control" placeholder="Ingrese su clave" type="password" name="pass">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block"> Ingresar </button>
                    </div>
                    <p class="text-center">
                      <a href="recuperarContrasena.php">¿Olvidó su clave?</a>
                    </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
     </section>
  </body>
</html>