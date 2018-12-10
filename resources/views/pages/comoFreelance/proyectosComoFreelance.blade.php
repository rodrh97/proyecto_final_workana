
@extends('layouts.layout_menu')

@section('contenido')
  <h1>Mis proyectos como Freelance</h1>
        


@foreach($propuestas as $propuesta)

        <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Proyecto: {{$proyectos[$propuesta->id_proyecto]['titulo']}}</strong>
                        </div> 
                           <br>
                        <div class="card-block">

                           
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Usuario:   {{$proyectos[$propuesta->id_proyecto]['id_usuario_cliente']}} </label>                                    
                                </div>
                                
                                <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Descripción del proyecto</label>
                                    <div class="col-sm-6">                                        
                                      <textarea name="descripcio" cols="30" rows="7" class="form-control">
                                        {{$proyectos[$propuesta->id_proyecto]['descripcion']}}
                                      </textarea>
                                    </div>
                                </div>
                                
                                <br>
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Estado: {{$proyectos[$propuesta->id_proyecto]['estado']}} </label>                                    
                                </div>
                                
                                <br>
                               <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Cobro: $MXN</label>
                                    <div class="col-sm-6 input-group">
                                      <span class="input-group-addon addon-primary">$</span>
                                        <input type="number" name="monto" class="form-control"  value="{{$proyectos[$propuesta->id_proyecto]['monto']}}" required>
                                      <span class="input-group-addon addon-orange">.00</span>
                                    </div>
                                </div>  
                                <br>              
                          
                          <label for="">Si el estado es evaluando propuestas aparece, sino no aparece el botón</label>
                           <div class="form-group row">
                                    <div class="col-sm-4"></div>
                              
                             <a href="/mejorarPropuesta"> <button type="submit" class="btn btn-gradient-01"> Mejorar propuesta  </button></a>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endforeach
@endsection