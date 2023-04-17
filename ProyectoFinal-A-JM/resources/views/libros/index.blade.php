<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
</head>
<body>
<header> 
    <div class="p-3 mb-2 bg-danger text-white">
      Tabla de Libros
  </div>
  </header>
 <br>
 <br>
    <div class="container text-center">
    <a href="{{ route('libros.create') }}">
<button class="btn btn-success">Crear cliente</button>
<a href="{{ route('pdf_l') }}">
<button class="btn btn-success">Generar Reporte</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Genero</th>
                <th>Paginas</th>
                <th>Proovedor</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $li)
                <tr>
                <td>{{$li -> id}}</td>
                <td>{{$li -> nombre}}</td>
                <td>{{$li -> autor}}</td>
                <td>{{$li -> genero}}</td>
                <td>{{$li -> paginas}}</td>
                <td>{{$li -> proovedores-> nombre}}</td>
                <td>
                <a href="{{route('libros.edit',$li-> id)}}">
                    <button class="btn btn-primary">Editar</button>
                </a>
                <form action="{{ route('libros.destroy',$li-> id) }}" method="post">
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

