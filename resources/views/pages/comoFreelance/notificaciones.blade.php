

@extends('layouts.layout_menu')

@section('contenido')

  <!-- Lista de las propuestas aceptada/rechazadas -->

  <h1> Notificaciones </h1> <br>
       
@foreach($propuestas as $propuesta)
   
        <div class="page-body">           
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Proyecto: {{$propuesta->id_proyecto}} </strong>
                        </div>                          
                        <div class="card-block">                           
                                
                              <br>
                            <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Descripcion:  {{$propuesta->descripcion}} </label>                                 
                                </div>
                          
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Valor:  {{$propuesta->valor}} </label>                                 
                                </div>
                                
                                
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Estatus: {{$propuesta->status}} </label>                                    
                                </div>                                                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
@endsection