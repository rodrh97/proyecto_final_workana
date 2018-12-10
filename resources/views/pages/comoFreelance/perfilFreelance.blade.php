
@extends('layouts.layout_menu')

@section('contenido')

  <!-- Perfil como Freelance -->

  <h1>Mi Perfil como Freelance</h1> 
<a href="/editarPerfil"> <button class="btn btn-success" type="submit" name="registro"> Editar </button> </a>
                
        <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Nombre: {{auth()->user()->name}} </strong>
                        </div> 
                           <br>
                        <div class="card-block">

                           
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Imagen </label>                                    
                                </div>
                                
                                <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">{{auth()->user()->descripcion_corta}}</label>                                 
                                </div>
                                
                                <br>
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> País: México </label>                                    
                                </div>
                                
                                 <br>
                                 <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Proyectos realizados:  </label>
                                </div>
                                
                                <br>
                                 <div>
                                    
                                  <strong> <h2><center><label> Programación y Tecnología</label></center></h2></strong>
                                   <br>
                                   <h2><center><label> Habilidades </label></center></h2>
                                   
                                   <!-- Poner las distintas habilidades -->
                                   <center><button class="btn btn-primary" type="submit" name="registro"> HTML </button></center>
                                </div>
                               
                                <br>                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
<!-- PORTAFOLIO  Lista de proyectos realizados -->
<br><br><br>
<h2> <strong> Portafolio de proyectos realizados </strong> </h2> 
                
        <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Proyecto  -Nombre del proyecto- </strong>
                        </div> 
                           <br>
                        <div class="card-block">

                           
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Usuario cliente </label>                                    
                                </div>
                          
                               <br>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> País: México </label>                                    
                                </div>
                                
                                <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label"> Caegoria del proyecto </label>                                 
                                </div>             
                          
                                  <br>
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Breve cometario del cliente</label>                                 
                                </div> 
                        
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- SOBRE MÍ -->
<br><br><br>
                
        <div class="page-body">            
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Sobre mí </strong>
                        </div> 
                           
                        <div class="card-block">                           
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">{{auth()->user()->descripcion_sobreMi}} </label>                                    
                                </div>                                                                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection