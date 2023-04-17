<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro_Libros_MARAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
   <!-- Barra de navegacion -->
   <!-- <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <img src="imgs/PORTADAS E INFO GNR..png" alt="Logo" width="30" height="24">
      <a class="navbar-brand" href="#">MaracBookworms</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html" title="same dirc link" target="_blank">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="productos.html" title="same dir link" target="_blank">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html" title="same dir2 link" target="_blank">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="graficos.html" title="same dir3 link" target="_blank">Estadisticas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav> -->
  <header> 
    <div class="p-3 mb-2 bg-danger text-white">
      Registro Libros
  </div>
  </header>
 <br>
 <br>
  <h1 style="color: rgb(136, 37, 102); font-size: 60px; text-align: center;"> Registro Libros</h1>
  <h2 style="text-align: center"> MARAC</h2>
  <br>
  <br>
  <div class="container text-center">
    <form action="{{route('libros.update',$libro->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="row">
      <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4">
                <div class="formulario-grupo" id="grupo-nombre">
                    <label for="nombre" class="formulario-label"><strong>Nombre del Libro</strong></label>
                    <div class="formulario-grupo-input">
                        <input type="text" class="formulario-input" name="nombre" id="nombre" value="{{$libro->nombre}}" placeholder="nombre" 
                     title= "Letras y espacios, pueden llevar acentos." pattern="^[a-zA-ZÀ-ÿ\s]{1,40}$" required>  <!-- onchange() -->
                    </div>
                    <div id="r_nombre"></div>
                    <!-- <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->
                </div>
                <br>
                <div class="formulario-grupo" id="grupo-autor">
                    <label for="autor" class="formulario-label"><strong>Autor</strong></label>
                    <div class="formulario-grupo-input">
                        <input type="text" class="formulario-input" name="autor" id="autor" placeholder="autor" value="{{$libro->autor}}" required>
                    </div>
                    <div id="r_autor"></div>
                </div>
                <br>
                <div class="formulario-grupo" id="grupo-genero">
                    <label for="genero" class="formulario-label"><strong>Genero</strong></label>
                    <div class="formulario-grupo-input">
                        <input type="text" class="formulario-input" name="genero" id="genero" value="{{$libro->genero}}" placeholder="genero" required>
                    </div>
                    <div id="r_genero"></div>
                </div>
                <br>
                <div class="formulario-grupo" id="grupo-paginas">
                  <label for="paginas" class="formulario-label"><strong> Paginas </strong></label>
                  <div class="formulario-grupo-input">
                      <input type="text" class="formulario-input" name="paginas" id="paginas" placeholder="paginas"
                  pattern="^[0-9]{1,40}$" title="Numeros"  value="{{$libro->paginas}}" required>
                  </div>
                  <div id="r_paginas"></div>
              </div>              
              <!-- PROOVEDOR ID x Foreign key -->
              <div class="formulario-grupo" id="grupo-proovedor_id">
              <label for="proovedor_id" class="formulario-label"><strong> Proveedor </strong></label>
              <div class="formulario-grupo-input">
                <select class="form-control" id="proovedor_id" name="proovedor_id" value="{{$libro->proovedor_id}}">
                  @foreach($proovedor as $prove)
                  <option value="{{$prove->id}}">{{$prove->nombre}}</option>
                  @endforeach
                </select>
              </div>
              <div id="r_proovedor_id"></div>
              </div>
              <br>
              <br>
                    <!-- <p class="formulario__input-error"> No coinciden las longitudes.</p> -->
                <br>
                <br>
                <button type="submit" class="btn btn-danger" id="boton" >Enviar</button>
        </div>
        <div class="col-6 col-md-4"></div>
    </div>
    </form>
 </div>
 <!-- <script src="js/registroproovedores.js"></script> -->
</body>
<footer>
  <br>
  <div class="p-3 mb-2 bg-danger text-white">
  <p style="text-align: center">
Proyecto Final Tecnologías web - Andrea y Jose Miguel 2022 &copy; Copyright
  </p>
</div>
</footer>
</html>
