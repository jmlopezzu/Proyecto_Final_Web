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
    <a href="{{ route('prestamo.create') }}">
<button class="btn btn-success">Prestar</button>
<a href="{{ route('pdf_pres') }}">
<button class="btn btn-success">Generar Reporte</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Id</th>
                <th>Libro</th>
                <th>Cliente</th>
                <th>Costo</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prestamo as $pres)
                <tr>
                <td>{{$pres -> id}}</td>
                <td>{{$pres -> libros1-> nombre}}</td>
                <td>{{$pres -> clientes-> nombre}}</td>
                <td>{{$pres -> costo}}</td>
                <td>
                <a href="{{route('prestamo.edit',$pres-> id)}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
                <form action="{{ route('prestamo.destroy',$pres-> id) }}" method="post">
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

