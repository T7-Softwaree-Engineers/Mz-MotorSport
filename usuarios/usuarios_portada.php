<!DOCTYPE html>
<html lang="en" style="color: var(--blue);">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="/css/styles.css">
  <title>MzMotorSport: Dashboard</title>
</head><!--Título de pestaña, importaciones y conexiones-->
<body>
<?php
  session_start();
  if(!isset($_SESSION['usuarios_login']))    
  {
      header("location: ../login.php");  
  } #Comprueba que el admin esté logueado, si no lo está lo manda a iniciar sesión
?>
<br>
<div class="position-relative">
  <div class="position-absolute top-50 start-50 translate-middle">
    <a href="../index.html"><img src="../assets/img/MZMOTORSPORTLOGOcut.png" alt="" style="padding-top: 50px;"></a>
  </div>  
</div>
<br>

<!-- Comienza dashboard -->
<section class="container mt-5 w-75">
  <div class="row">
   <div class="col">
     <div class="p-3 pb-5 bg-light " style="border-radius: 15px;">
       <h4>Vender</h4>
       <small>Hacer nueva publicación de venta.</small><br>
       <a href="Vauto.php" class="btn btn-primary float-end">Entrar</a>
      </div>
    </div>
    <!---->
    <div class="col">
     <div class="p-3 pb-5 bg-light" style="border-radius: 15px;">
       <h4>Publicaciones</h4>
       <small>Ver lista de mis publicaciones.</small><br>
       <a href="PagPublicaciones.php" class="btn btn-primary float-end">Entrar</a>
      </div>
    </div>
  </div>
</section>
<!---->
<section class="container mt-3 w-75">
<div class="row">
 <div class="col">
   <div class="p-3 pb-5 bg-light " style="border-radius: 15px;">
     <h4>Comprar</h4>
     <small>Ver lista de automóviles en venta.</small><br>
     <a href="../Cauto.html" class="btn btn-primary float-end">Entrar</a>
    </div>
  </div>
  <!---->
  <div class="col">
   <div class="p-3 pb-5 bg-light " style="border-radius: 15px;">
     <h4>Blog</h4>
     <small>Ver blog de noticias MZMotorSport</small><br>
     <a href="#" class="btn btn-primary float-end">Entrar</a>
    </div>
  </div>
</div>
</section>
<!-- Termina dashboard -->
 <br><br>
 <div class="d-grid gap-2 col-6 mx-auto ">
  <button class="btn btn-primary" type="button" ><a href="../cerrar_sesion.php" style="color:rgb(255, 255, 255);">Cerrar Sesión</button></a> <!-- Botón para cerrar sesión -->
</div> <!--Cuerpo del blog, publicaciones más recientes, redes sociales, footer, etc.-->
</body><!--Cuerpo de la página-->
</html>