@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="card-header">Proovedor</div>
                <div class="card-body">
                  <form method="post" action="{{route('proovedor.update',$proovedor->id)}}">
                  @method('PUT')
                  @csrf
                <div class="row mb-3" id="grupo-nombre">
                    <label for="nombre" class="col-md-4 col-form-label text-md-end">Nombre del proveedor</label>
                    <div class="col-md-6">
                        <input type="text" class="formulario-control" name="nombre" id="nombre" placeholder="nombre" 
                        value = "{{$proovedor->nombre}}" title= "Letras y espacios, pueden llevar acentos." pattern="^[a-zA-ZÀ-ÿ\s]{1,40}$" required> 
                    </div>
                    <div id="r_nombre"></div>
                    <!-- <p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->
                </div>
                <div class="row mb-3" id="grupo-apellido">
                    <label for="apellido" class="col-md-4 col-form-label text-md-end">Apellido</label>
                    <div class="col-md-6">
                        <input type="text" class="formulario-control" name="apellido" value = "{{$proovedor->apellido}}" id="apellido" placeholder="apellido" required>
                    </div>
                    <div id="r_apellido"></div>
                </div>
                <div class="row mb-3" id="grupo-celular">
                  <label for="celular" class="col-md-4 col-form-label text-md-end">Celular</label>
                  <div class="col-md-6">
                      <input type="text" class="formulario-control" name="celular" id="celular" placeholder="celular"
                      value = "{{$proovedor->celular}}" pattern="^[0-9]{1,40}$" title="Numeros" required>
                  </div>
                  <div id="r_celular"></div>
              </div>              
              <div class="row mb-3" id="grupo-nit">
                <label for="nit" class="col-md-4 col-form-label text-md-end">NIT</label>
                <div class="col-md-6">
                    <input type="text" class="formulario-control" name="nit" id="nit" placeholder="nit"
                pattern="^[0-9]{1,40}$" title="Numeros" value = "{{$proovedor->nit}}" required>
                </div>
                <div id="r_nit"></div>
            </div>
                <div class="row mb-0">
                <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-danger" id="boton">Actualizar</button>
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
<footer>
  <br>
  <div class="p-3 mb-2 bg-danger text-white">
  <p style="text-align: center">
Proyecto Final Tecnologías web - Andrea y Jose Miguel 2022 &copy; Copyright
  </p>
</div>
</footer>
@endsection