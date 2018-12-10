@extends('layouts.layout_menu')

@section('contenido')

<h1> Buscar proyectos </h1> 
<br>
 


<!-- AQUI APARECEN TODOS LOS PROYECTOS EN UN FOREACH, EXCEPTO LOS QUE EL USUARIO HAYA CREADO O LOS CANCELADOS -->
  @foreach($proyectos as $proyecto)
    @if(auth()->user()->id != $proyecto->id_usuario_cliente && $proyecto->estado != "Cancelado")
      
    
  
  <div class="page-body">
      <br>
      <div class="row">
          <div class="col-sm-12">
              <div class="card">
                  <div class="card-header" style="background-color: gray; color: white;">
                      <strong> Proyecto: {{$proyecto->titulo}} </strong>
                  </div> 
                     <br>
                  <div class="card-block">


                          <br>
                        <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Propuestas </label>
                          </div>

                          <br>
                           <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Descripción </label>
                              <div class="col-sm-6">
                                  {{$proyecto->descripcion}}
                              </div>
                          </div>

                           <br>
                           <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Categoría:  </label>
                             <div class="col-sm-6">
                              {{$proyecto->categoria}}
                             </div>
                          </div>

                            <br>
                           <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Pago: $MXN  </label>
                             <div class="col-sm-6">
                               $ {{$proyecto->monto}}.00 MXN
                             </div>
                          </div>

                           <br>
                           <div class="form-group row">
                              <div class="col-sm-2"></div>
                              <label class="col-sm-3 col-form-label"> Usuario: {{$proyecto->id_usuario_cliente}} </label>
                          </div>
                          <br>   
                     <div class="form-group row">
                              <div class="col-sm-4"></div> <!-- Necesito Id de usuario y de proyecto -->
                              <a href="/realizarPropuesta/{{auth()->user()->id}}/{{$proyecto->id}}"> <button class="btn btn-success" type="submit" name="propuesta"> Realizar propuesta </button> </a> 
                          </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
<br>
@endif
@endforeach


@endsection













<!-- 
<a href="/proyectosConMisHabilidades"> <button class="btn btn-success" type="submit" name="registro"> Proyectos con mis habilidades </button> </a> 
  
<br><br><br>
<div>
  <h4> <strong> Filtrar </strong> </h4>
  
  
  <div>
    
    <input type="checkbox" name="programacionWeb">
    <label for="programacion web"> Programación web</label>
    <br>
    <input type="checkbox">
    <label for="diseño web"> Diseño web </label>
    <br>
    <input type="checkbox">
    <label for="tiendas virtuales(ecommerce)"> Tiendas Virtuales (ecommerce) </label>
    <br>
    <input type="checkbox">
    <label for="wordpress"> Wordpress </label>
    <br>
    <input type="checkbox">
    <label for="programacion de apps"> Programación de apps Móviles</label>
    <br>
    <input type="checkbox">
    <label for="aplicaciones de escritorio"> Aplicaciones de escritorio </label>
  </div>
</div> 

-->