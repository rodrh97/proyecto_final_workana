<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proyecto;
use App\Propuesta;

class PropuestaController extends Controller
{ 
    
  // Muestra el formulario
  public function fillForm($id_usuario,$id_proyecto){
    return view('pages.comoFreelance.realizarPropuesta', compact('id_usuario','id_proyecto'));    
  }
  
    // Función para guardar una propuesta
    public function store(){
       $propuesta = new Propuesta();
       
      $propuesta->id_usuario_freelance = request('id_usuario');
      $propuesta->id_proyecto = request('id_proyecto');
      $propuesta->dias = request('plazo');
      $propuesta->valor = request('valor');   
      $propuesta->descripcion = request('propuesta');                        
            
      $propuesta->save();
      
      return redirect('/proyectosComoFreelance');
    }
  
  public function consultarPropuestas(){
    //$propuestas = Propuesta::all();
    $propuestas = Propuesta::where('id_usuario_freelance',auth()->user()->id)->get();
    //dd($propuestas);
    return view('pages.comoFreelance.notificaciones', compact('propuestas'));
  }
}
