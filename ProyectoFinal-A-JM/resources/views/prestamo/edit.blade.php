<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro_Prestamo_MARAC</title>
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
      Registro Prestamo
  </div>
  </header>
 <br>
 <br>
  <h1 style="color: rgb(136, 37, 102); font-size: 60px; text-align: center;"> Registro Prestamo </h1>
  <h2 style="text-align: center"> MARAC</h2>
  <br>
  <br>
  <div class="container text-center">
    <form action="{{route('prestamo.update',$prestamo->id)}}" method="post">
    @method('PUT')
    @csrf
    <div class="row">
      <div class="col-6 col-md-4"></div>
        <div class="col-6 col-md-4">
                <div class="formulario-grupo" id="grupo-libro_id">
                    <label for="libro_id" class="formulario-label"><strong>Identificador del Libro ID</strong></label>
                    <div class="formulario-grupo-input">
                    <select class="form-control" id="libro_id" name="libro_id" value="{{$prestamo->libro_id}}">
                    @foreach($libroid as $libro)
                    <option value="{{$libro->id}}">{{$libro->nombre}}</option>
                    @endforeach
                    </select>
                    <!-- onchange() -->
                    </div>
                    <div id="r_libro_id"></div>
                    <!-- <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->
                </div>
                <br>
                <div class="formulario-grupo" id="grupo-cliente_id">
                    <label for="cliente_id" class="formulario-label"><strong>Identificador del Cliente ID</strong></label>
                    <div class="formulario-grupo-input">
                    <select class="form-control" id="cliente_id" name="cliente_id" value="{{$prestamo->cliente_id}}">
                    @foreach($clienteid as $clien)
                    <option value="{{$clien->id}}">{{$clien->nombre}}</option>
                    @endforeach
                    </select>
                    </div>
                    <div id="r_cliente_id"></div>
                </div>
                <br>
                <div class="formulario-grupo" id="grupo-costo">
                  <label for="costo" class="formulario-label"><strong> Costo </strong></label>
                  <div class="formulario-grupo-input">
                      <input type="text" class="formulario-input" name="costo" id="costo" placeholder="costo"
                  pattern="^[0-9]{1,40}$" title="Numeros"  value="{{$prestamo->costo}}"required>
                  </div>
                  <div id="r_costo"></div>
              </div>             
              <!-- LIBRO ID x Foreign Key --> 
              <!-- Cliente ID x Foreign Key --> 
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


