
@extends('layouts.layout_menu')

@section('contenido')
  <h1>Freelancers contratados</h1>

          <!-- Si no tiene Freelance -->
            <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <span>Si no tiene: Aún no ha contratado Freelancers!!</span>
                        </div> 
                           <br>
                        <div class="card-block">                                                           
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-4"></div>
                                    <a href="/crearProyecto"> <input type="submit" class="btn btn-gradient-01 col-sm-12" value="Crear proyecto"> </a> 
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        
        <!-- Si ha contratado al menos un Freelance -->
        <div class="page-body">
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong> Si tiene: Usuario: - nombre - valor hora: $MXN </strong>
                        </div> 
                           <br>
                        <div class="card-block">

                           
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Titulo del proyecto</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="titulo" class="form-control form-control-center form-control-round" value="Titulo" required>
                                    </div>
                                </div>
                                
                                <br>
                              <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Descripción del proyecto</label>
                                    <div class="col-sm-6">                                        
                                      <textarea name="descripcio" cols="30" rows="10" class="form-control">
                                        Descripción
                                      </textarea>
                                    </div>
                                </div>
                                
                                <br>
                               <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                    <label class="col-sm-3 col-form-label">Monto pagado</label>
                                    <div class="col-sm-6 input-group">
                                      <span class="input-group-addon addon-primary">$</span>
                                        <input type="number" name="monto" class="form-control"  value="1999" required>
                                      <span class="input-group-addon addon-orange">.00</span>
                                    </div>
                                </div>                                                                                                
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection