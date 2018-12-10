<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">        
        <link rel="icon" type="image/png" sizes="16x16" href="imagenes/circulo-workana.jpg">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <title>Inicio</title>
  </head>
  <body>
    <div id="preloader">
            <div class="canvas"> <!-- IMAGEN QUE APARECE AL CARGAR LA PÁGINA -->
                <img src="imagenes/circulo-workana.jpg" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
    
    <nav class="navbar navbar-white bg-white navbar-holder d-flex align-items-right align-right justify-content-between auto" >
        <a class="p-3" href="/iniciarSesion"><button class="btn btn-primary mr-2 mb-2"><i class="la la-user"> Iniciar sesión</i></button></a>
    <a class="p-3" href="/registro"><button class="btn btn-success mr-2 mb-2"><i class="la la-pencil"> Registrar</i></button></a>        
    </nav>
    
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <img src="imagenes/circulo-workana.jpg" width="100px" height="100px">
        <h1 class="display-4 font-weight-normal">Bienvenido a nuestro Proyecto TAW</h1>
        <p class="lead font-weight-normal"> </p>
      </div>
<!--       <div class="product-device box-shadow d-none d-md-block"></div> -->
<!--       <div class="product-device product-device-2 box-shadow d-none d-md-block"></div> -->
    </div>

    
    
    <footer class="container py-5">
        <center><div class="col-6 col-md">
          <h5>Creadores</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Perez Sanchez Miguel Angel</a></li>
            <li><a class="text-muted" href="#">Rojas Huerta Rodrigo</a></li>
            <li><a class="text-muted" href="#">Tovias Alanis David</a></li>
          </ul>
        </div></center>
        
        
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
   </body>
</html>