<?php
include('../config/config.php');
include('trabajador.php');

if (isset($_POST) && !empty($_POST)){
 

  $data= new trabajador(); 

  if ($_FILES['imagen']['name'] !== ''){
    $_POST['imagen'] = saveImage($_FILES);
  }

  $save = $data-> save($_POST); /* UTILICE LA RECETA SAVE */
  if($save){
    $mensaje= '<div class="alert alert-success" role="alert">Usuario creado correctamente </div> ';
  }else{
    $mensaje='<div class="alert alert-danger" role="alert">Error al crear el usuario </div> ';
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE PERSONAL</title>

    <link rel="preconnect" href="https://fonts.googleapis.com"><!-- fuente de tipografia de letra bajada directamente de una pagina -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="../ESTILOS/stylein.css">
  </head>
<body>
<nav class="navbar navbar-expand-lg navbar-ligth bg-ligth bg-gradient">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="../IMAGENES/logo de refrige.jpg" alt="" width="120px" height ="100px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 110px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.html">INICIO</a></li>
          <li class="nav-item">
            <a class="nav-link" href="../productos.html">PRODUCTOS</a></li>

          <li class="nav-item">
            <a class="nav-link" href="../servicio tecnico electromecanico.html">SERVICIO TECNICO ELECTROMECANICO</a></li>
          <li class="nav-item">
            <a class="nav-link" href="../cuartos frios.html">CUARTOS FRIOS</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="../trabajador/add.php">CONTACTANOS</a>
          </li>
        </ul>
        <br>
        <form class="d-flex" role="search">
          <button class="btn btn-outline-success" type="submit">BUSCAR</button>
        </form>
      </div>
    </div>
</nav>

<?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>
<!-- CREAN FORMULARIO -->
<form method="POST" enctype="multipart/form-data" class="row g-0" style="background-color: rgb(198, 118, 19); ">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" name="nombre" id="nombre"   class="form-control" >
    
  </div>
  <br>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" name="apellidos" id="apellidos"  class="form-control" >
  </div>
  <br>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Correo</label>
    <input type="email" name="email" id="email" class="form-control"  >
  </div>
  <br>
  <div class="col-6">
  <label for="inputAddress" class="form-label">Enfermedades</label>
    <textarea name="enfermedades" id="enfermedades" placeholder=" enfermedades "class="form-control"></textarea>
  </div>
  <br>
  <div class="col-6">
    <label for="inputAddress" class="form-label">cargo</label>
    <input type="text" name="cargo" id="cargo" class="form-control"  >
  </div>
  <br>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Imagen</label>
    <input type="file" name="imagen" id="imagen" class="form-control">
  </div>
  <br>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Fecha</label>
    <input type="datetime-local" name="fecha" id="fecha" class="form-control"  >
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <div class="col-10">
    <button  class="btn btn-primary">Registrar</button>
  </div>
  <footer>
  <section class="footer" >
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="../IMAGENES/logo de refrige.jpg" class="card-img-top" alt="logo" width="70px" height="200px">
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text"></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">TE ESPERAMOS...</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title"> CONTACTANOS</h5>
          <p class="card-text"><a href="#">AL TELEFONO 7422371</a>-
            <a href="#">CEL 3214876091</a>-
            <address> DIRECCION</address>
            <a href="#">CARRERA 7 # 4-32 SOACHA</a>-</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
       
        <div class="card-body">
          <h5 class="card-title">SIGUENOS EN NUESTRAS REDES</h5>
                <article>
                <div class="card-group">
             <div class="card">
          <a href="https://www.facebook.com/FrutiDomiSoacha/"> <img src="../IMAGENES/facebook.jpg" class="card-img-top" alt="..."> </a>
       </div>
        <div class="card">
        <a href=""><img src="../IMAGENES/instagram.jpg" class="card-img-top" alt="instagram"> </a> </div>
         <div class="card">
        <a href=""> <img src="../IMAGENES/twitter.jpg" class="card-img-top" alt="twitter"></a>
          </div>
         </article> 
        </div>
        <div class="card-footer">
          <small class="text-muted"></small>
        </div>
      </div>
    </div>
  </div>
</section>
 </footer>
</html>