<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Proyecto;
use App\Propuesta;

class Proyectos extends Controller
{
  
    // Se muestran los proyectos
    public function index(){
     $proyectos = Proyecto::all();
     return view('pages.como_cliente.proyectos_como_cliente', compact('proyectos'));
      
    }
  
    // Publicar todos los proyectos en Buscar trabajo
    public function indexProyectos(){
      $proyectos = Proyecto::all();
     return view('pages.comoFreelance.buscarProyectos', compact('proyectos'));
    }
  
    // Guardar el proyecto
    public function store(){
      
      $proyecto = new Proyecto();
      $proyecto->id_usuario_cliente = request('id');      
      $proyecto->categoria = request('categoria');
      $proyecto->titulo = request('titulo');
      $proyecto->descripcion = request('descripcion');
      $proyecto->monto = request('monto');
      
      $proyecto->save();
      
      return redirect('proyectosComoCliente');      
    }
  
  
    // Cancelar proyecto, cambiar de Estado a "cancelado"
    public function cancelar($id){
       $proyecto = Proyecto::find($id);
      
       $proyecto->estado = "Cancelado";
       $proyecto->save();
      
      return redirect('proyectosComoCliente');
    }
  
  public function proyectosUsuario(){
    $propuestas = Propuesta::where('id_usuario_freelance',auth()->user()->id)->get();
    $proyectos = Proyecto::all();
    
    return view('pages.comoFreelance.proyectosComoFreelance')->with('propuestas',$propuestas)->with('proyectos',$proyectos);
  }
}





