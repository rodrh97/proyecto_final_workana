@extends('layouts.layout_menu')

@section('contenido')

<h1>Proyectos con mis habilidades</h1> <br>
<div>
  <a href="/buscarProyectos"> <button class="btn btn-success" type="submit" name=""> Todos los proyectos </button> </a> 
</div>
<br>
<div>
  <h4>Habilidades</h4>
  <div>
    
    <!-- Poner todas las habilidades del freelance aquí -->
  </div>
</div>

<br>
  
      <div class="page-body">
          <br>
          <div class="row">
              <div class="col-sm-12">
                  <div class="card">
                      <div class="card-header">
                          <strong> Proyecto: - nombre proyecto - </strong>
                      </div> 
                         <br>
                      <div class="card-block">


                            <div class="form-group row">
                                  <div class="col-sm-2"></div>
                                  <label class="col-sm-3 col-form-label"> Plazo </label>                                    
                              </div>

                              <br>
                            <div class="form-group row">
                                  <div class="col-sm-2"></div>
                                  <label class="col-sm-3 col-form-label"> Peopuestas </label>                                 
                              </div>

                              <br>
                               <div class="form-group row">
                                  <div class="col-sm-2"></div>
                                  <label class="col-sm-3 col-form-label"> Descripción </label>                                    
                              </div>

                               <br>
                               <div class="form-group row">
                                  <div class="col-sm-2"></div>
                                  <label class="col-sm-3 col-form-label"> Categoría:  </label>
                              </div>

                                <br>
                               <div class="form-group row">
                                  <div class="col-sm-2"></div>
                                  <label class="col-sm-3 col-form-label"> Pago: $MXN  </label>
                              </div>

                               <br>
                               <div class="form-group row">
                                  <div class="col-sm-2"></div>
                                  <label class="col-sm-3 col-form-label"> Usuario: nombre cliente </label>
                              </div>
                              <br>   
                         <div class="form-group row">
                                  <div class="col-sm-4"></div>
                                  <a href="/realizarPropuesta"> <button class="btn btn-success" type="submit" name="registro"> Realizar propuesta </button> </a> 
                              </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>

<br>


@endsection