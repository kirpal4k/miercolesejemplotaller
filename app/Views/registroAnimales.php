<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ANIMALANDIA</title>
	<link rel="stylesheet" href="<?php echo(base_url('public/styles/estilos.css')) ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
</head>
<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark fondo">
  <div class="container-fluid">
    <a class="navbar-brand fuente" href="<?= site_url('/')?>"> <i class="fas fa-paw"></i>
	Animalandia
	</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
	aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        	<li class="nav-item">
          		<a class="nav-link active" aria-current="page" href="<?= site_url('/')?>">Inicio</a>
        	</li>
        	<li class="nav-item">
          		<a class="nav-link" href="<?= site_url('/productos/registro')?>">Registro Productos</a>
        	</li>
			<li class="nav-item">
          		<a class="nav-link" href="<?= site_url('/Animales/registro')?>">Registro Animales</a>
        	</li>
      </ul>
     
    </div>
  </div>
</nav>
</header>

<main>
    <div class="container">
        <div class="row d-flex justify-content-center mt-5 mx-5">
            <div class="col-12 col-md-5">
                <h1 class="fuente">Registro De Animales</h1>
                <form action ="<?= site_url('/Animales/registro/nuevo') ?>" method = "POST">
                    <div class="mb-3">
                        <label class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">foto:</label>
                        <input type="text" class="form-control" name="foto" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad:</label>
                        <input type="text" class="form-control" id="exampleInputPassword1"  name="edad">
                    </div>
                   
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Descripcion" name="descripcion" style="height: 100px"></textarea>
                        <label for="floatingTextarea">Descripción</label>
                    </div>
                    <div class="mb-3">
                            <label class="form-label">Tipo de animal:</label>
                            <select class="form-select" name="tipo">
                                <option value="1" selected>Perro</option>
                                <option value="2">Gato</option>
                                <option value="3">Ave</option>
                                <option value="4">Caballo</option>
                                <option value="5">Reptil</option>
                            </select>
                    </div>
                        
                    <div class="">
                        <button type="submit" class="btn btn-info">Enviar</button>
                    </div>
                        
                    
                
                </form>
            </div>
            <div class="col-12 col-md-5 align-self-center text-center">
                    <img src="<?= base_url('public/img/perrosRegistro.jpg') ?>" alt="imagen" class="img-fluid w-100">
                    <a href="<?=site_url('/Animales/listado') ?>" class="btn btn-danger mt-5">Ver inventario</a>
            </div> 
        </div> 
        
    </div>


</main>

<section>
    <?php if(session('mensaje')): ?>
        <div class="modal fade" id="modalrespuesta" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header fondo" style="justify-content: center;">
                        <h2 class="modal-title fuente text-white" >CASAHOGAR</h2>
                        
                    </div>
                    <div class="modal-body">
                        <h5 style="text-align: center">
                            <?= session('mensaje') ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?> 
</section>

<script src="https://kit.fontawesome.com/3675f85246.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script type="module" src="<?=base_url('public/js/lanzarmodal.js') ?>"></script>

</body>
</html>