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
    <a href="{{ route('clientes.create') }}">
<button class="btn btn-success">
    Crear cliente
</button>
<a href="{{ route('pdf_c') }}">
<button class="btn btn-success">Generar Reporte</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $clie)
                <tr>
                <td>{{$clie -> id}}</td>
                <td>{{$clie -> nombre}}</td>
                <td>{{$clie -> apellido}}</td>
                <td>{{$clie -> celular}}</td>
                <td>
                <a href="{{route('clientes.edit',$clie-> id)}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
                <form action="{{ route('clientes.destroy',$clie-> id) }}" method="post">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">
                Eliminar
                </button>
                </form> 
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</body>
</html>

