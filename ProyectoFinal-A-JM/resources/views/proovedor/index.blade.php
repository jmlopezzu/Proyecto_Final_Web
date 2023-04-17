<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proovedor</title>
</head>
<body>
<header> 
    <div class="p-3 mb-2 bg-danger text-white">
      Tabla de Proovedores
  </div>
  </header>
 <br>
 <br>
    <div class="container text-center">
    <a href="{{ route('proovedor.create') }}">
        <button class="btn btn-success">Nuevo Proovedor</button>
    <a href="{{ route('pdf_p') }}">
    <button class="btn btn-success">Generar Reporte</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                <th>Nit</th>
                <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proovedor as $proove)
                <tr>
                <td>{{$proove -> id}}</td>
                <td>{{$proove -> nombre}}</td>
                <td>{{$proove -> apellido}}</td>
                <td>{{$proove -> celular}}</td>
                <td>{{$proove -> nit}}</td>
                <td>
                <a href="{{route('proovedor.edit',$proove-> id)}}">
        <button class="btn btn-primary">Editar</button>
        </a>
        <form action="{{ route('proovedor.destroy',$proove-> id) }}" method="post">
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