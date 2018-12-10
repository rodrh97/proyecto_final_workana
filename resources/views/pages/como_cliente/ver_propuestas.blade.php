

@extends('layouts.layout_menu')

@section('contenido')

  <!-- Perfil como Freelance -->

  <h1> Proyecto: nombre del proyecto </h1>
                
        <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Propuesta de: - nombre del freelance - </strong>
                        </div> 
                           <br>
                        <div class="card-block">                                                              
                                
                                <br>
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Propuesta: Descripción de la propuesta </label>                                    
                                </div>
                                
                                <br>
                          <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <input type="submit" class="btn btn-success col-sm-3" value="Contratar">
                                </div>
                                                               
                                <br>                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection