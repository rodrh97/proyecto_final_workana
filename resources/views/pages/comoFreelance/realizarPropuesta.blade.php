
@extends('layouts.layout_menu')

@section('contenido')
  <h1> Realizar propuesta </h1>
          <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <span>Envía una propuesta para que el cliente te contrate!</span>
                        </div> 
                           <br>
                        <div class="card-block">

                            <!--Crea el formulario de agregar propuesta mediante el metodo post -->
                            <form method="POST" action="/realizarPropuesta/store">  
                               {{ csrf_field() }}
                              
                             <input type="hidden" name="id_usuario" value="{{$id_usuario}}">
                              
                              <input type="hidden" name="id_proyecto" value="{{$id_proyecto}}">
                              <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Titulo del proyecto: < Titulo >  </label>                                   
                                </div>
                                
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Categoría: < Categoria > </label>
                                </div>
                              
                              <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Propuesta </label>
                                    <div class="col-sm-6">
                                        <textarea name="propuesta" class="form-control form-control-center form-control-round" placeholder="Escribe la descripción del proyecto"  required cols="30" rows="7"></textarea>
                                       <!-- <input type="text" name="descripcion" class="form-control form-control-center form-control-round" placeholder="Escribe la descripción del proyecto"  required> -->
                                    </div>
                                </div>
                                
                                <br>
                              
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Plazo </label>
                                    <div class="col-sm-6">                                        
                                       <input type="number" name="plazo" class="form-control form-control-center form-control-round" placeholder="Dias que te tomarás para realizar el proyecto"  required>
                                    </div>
                                </div>
                               <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Valor</label>
                                    <div class="col-sm-6 input-group">
                                      <span class="input-group-addon addon-primary">$</span>
                                        <input type="number" name="valor" class="form-control"  required placeholder="Valor a cobrar $MXN">
                                      <span class="input-group-addon addon-orange">.00</span>
                                    </div>
                                </div>
                                
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <input type="submit" class="btn btn-primary col-sm-4" value="Enviar propuesta">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection