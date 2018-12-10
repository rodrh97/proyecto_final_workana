

@extends('layouts.layout_menu')

@section('contenido')

  <!-- Perfil como Freelance -->

  <h1>Editar Perfil</h1> 
                
        <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Editar datos del perfil </strong>
                        </div> 
                           <br>
                        <div class="card-block">
                <!-- FORMULARIO ACTUALIZAR DATOS -->
        <form class="needs-validation" enctype="multipart/form-data" method="post" action="/editarPerfil/{{auth()->user()->id}}">
            {{method_field('PATCH')}}
               {{csrf_field()}}
                <!-- NOMBRE COMPLETO -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Imagen de perfil </label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="file" class="form-control" placeholder="Imagen" name="imagenPerfil">
                            <span class="input-group-addon addon-primary"><i class="la la-image"></i></span>
                        </div>
                    </div>
                </div>
              

               
                <!-- SOBRE Mi -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end">Sobre mí (Mi experiencia, mis estudios, etc)</label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <textarea class="form-control" name="sobreMi">
                              
                          </textarea>
                            <span class="input-group-addon addon-primary"><i class="la la-edit"></i></span>
                        </div>
                    </div>
                </div>
                              
                 <!-- BREVE DESCRIPCIÓN -->
                <div class="form-group row d-flex align-items-center mb-5">
                    <label class="col-lg-4 form-control-label d-flex justify-content-lg-end"> Breve descripción </label>
                    <div class="col-lg-5">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Breve descripcion o palabra clave" name="descripcion">
                            <span class="input-group-addon addon-primary"><i class="la la-edit"></i></span>
                        </div>
                    </div>
                </div>

                
                <div class="text-center">
                    <input type="submit" class="btn btn-gradient-02" value="Actualizar">
                </div>
            </form>
               <!-- Fin formulario -->                                                
                <br>                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection