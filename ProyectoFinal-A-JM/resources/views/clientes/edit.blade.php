@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Clientes</div>
                <div class="card-body">
                  <form action="{{route('clientes.update',$clientes->id)}}" method="post">
                        @method('PUT')    
                        @csrf
                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre del Cliente</label>
                            <div class="col-md-6">
                                <input id=“nombre” type="text" class="form-control" name=“nombre” value="{{$clientes->nombre}}"/>
                            </div>
                        </div>

                    <div class="row mb-3">
                      <label for="apellido" class="col-md-4 col-form-label text-md-end">Apellido</label>
                      <div class="col-md-6">
                        <input id="apellido" type="text" class="form-control" name="apellido" value="{{$clientes->apellido}}"/>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="celular" class="col-md-4 col-form-label text-md-end">Celular</label>
                       <div class="col-md-6">
                        <input id="celular" type="text" class="form-control" name="celular" value="{{$clientes->celular}}"/>
                      </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                    </div>
<div class="col-6 col-md-4"></div>
</div>
                  </form>
                </div>
              </div>
            </div>
    </div>
@endsection
<br>
  <div class="p-3 mb-2 bg-danger text-white">
  <p style="text-align: center">
Proyecto Final Tecnologías web - Andrea y Jose Miguel 2022 &copy; Copyright
  </p>
</div>

