<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
<header> 
    <div class="p-3 mb-2 bg-danger text-white">
      Tabla de Clientes
  </div>
  </header>
 <br>
 <br>
    <div class="container text-center">
        <table class="table table-bordered">
            <thead style="background-color: #FF3380">
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $clie)
                <tr>
                <td>{{$clie -> id}}</td>
                <td>{{$clie -> nombre}}</td>
                <td>{{$clie -> apellido}}</td>
                <td>{{$clie -> celular}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>

