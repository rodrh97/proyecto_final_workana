
@extends('layouts.layout_menu')

@section('contenido')
  <h1>Mis proyectos como Cliente</h1>

        
        <div class="page-body">
          @foreach($proyectos as $proyecto)            
            @if(auth()->user()->id == $proyecto->id_usuario_cliente)
            
         
          
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Proyecto: {{$proyecto->titulo}} </strong>
                        </div> 
                           <br>
                        <div class="card-block">
                            <br>
                             
                          @if($proyecto->estado == "Evaluando propuestas")
                            <a href="verPropuestas"> <button class="btn btn-success" type="submit" name="registro"> Ver propuestas </button> </a> 
                            @else
                              
                          
                            <br>                          
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Usuario: - nombre del Freelance - </label>                                    
                                </div>
                           @endif
                                <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Descripción del proyecto:</label>
                                    <div class="col-sm-6">                                        
                                      {{$proyecto->descripcion}}
                                    </div>
                                </div>
                                
                                <br>
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Estado: </label> 
                                   @if($proyecto->estado == "Cancelado")
                                       <div class="col-sm-6" style="color: red;">
                                        {{$proyecto->estado}}
                                        </div>
                                   @else
                                   <div class="col-sm-6" style="color: green">
                                        {{$proyecto->estado}}
                                   </div>
                                   @endif
                                   
                                   
                                </div>
                                
                                <br>
                               <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">A pagar: $MXN</label>
                                    <div class="col-sm-6 input-group">
                                      <span class="input-group-addon addon-primary">$</span>
                                        <input type="number" name="monto" disabled class="form-control"  value="{{$proyecto->monto}}" required>
                                      <span class="input-group-addon addon-orange">.00</span>
                                    </div>
                                </div>  
                                <br>            
                          
                          @if($proyecto->estado != "Cancelado" && $proyecto->estado != "Terminado")
                          
                          
                           <div class="text-center">
                            <button class="btn btn-success" type="submit" name="registro">Proyecto terminado</button>
                             
                             
                             <!-- Cancelar proyecto -->
                             <form action="/proyecto/cancelar/{{$proyecto->id}}" method="POST">
                               {{csrf_field()}}
                                <button class="btn btn-danger" type="submit" >Cancelar</button>  
                             </form>
                            
                          </div>
                          @endif
                            
                        </div>
                    </div>
                </div>
            </div>
          
           @endif
        @endforeach
        </div>
@endsection