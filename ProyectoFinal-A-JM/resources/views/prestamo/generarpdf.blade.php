<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamos</title>
</head>
<body>
<header> 
    <div class="p-3 mb-2 bg-danger text-white">
      Tabla de Prestamos
  </div>
  </header>
 <br>
 <br>
    <div class="container text-center">
        <table class="table table-bordered">
            <thead style="color:#FF3380">
                <tr>
                <th>Id</th>
                <th>Libro</th>
                <th>Cliente</th>
                <th>Costo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestamos as $pres)
                <tr>
                <td>{{$pres -> id}}</td>
                <td>{{$pres -> libros1-> nombre}}</td>
                <td>{{$pres -> clientes-> nombre}}</td>
                <td>{{$pres -> costo}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>

