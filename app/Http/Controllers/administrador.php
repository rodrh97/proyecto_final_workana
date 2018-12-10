<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Temas;
use App\Ejercicios;
class administrador extends Controller
{
    //
  
  public function temas()
    {
        $datos = Temas::all();
        $hola ="holas";
        return view('Usuarios.administrador.temas',compact('datos'));
    }
  
  public function borrar($id)
    {
      Temas::find($id)->delete();
    
      return redirect('/Administrador/Temas');
    }
  
   public function borrarEjercicio($id)
    {
      Ejercicios::find($id)->delete();
    
      return redirect('/Administrador/Ejercicios');
    }
  
  
  public function ModuloTemaGramatica()
  {
        $datos = Temas::all()->where('tipoModulo',1);
        return view('Usuarios.alumno.Modulos.gramatica',compact('datos'));
  }
  
  public function ModuloTemaHablado()
  {
    $datos = Temas::all()->where('tipoModulo',3);
        return view('Usuarios.alumno.Modulos.hablado',compact('datos'));
  }
  
  public function ModuloTemaLectura()
  {
    $datos = Temas::all()->where('tipoModulo',2);
        return view('Usuarios.alumno.Modulos.lectura',compact('datos'));
  }
  
  public function ModuloTemaEscucha()
  {
    $datos = Temas::all()->where('tipoModulo',4);
        return view('Usuarios.alumno.Modulos.escucha',compact('datos'));
  }
  
  public function ActGramatica($id)
  {
    $tema = Temas::find($id);
    $ejercicios = Ejercicios::all()->where('temas_id',$tema->id);
    return view('Usuarios.alumno.Modulos.ActGramatica' ,["datos"=>$tema , "ejercicios" => $ejercicios  ]);
  }
  
  public function AgregarEjercicio(Request $request)
  {
    //dd($request);
    $nuevo = new Ejercicios;
    $nuevo->temas_id=request('temas_id');
    $nuevo->nombre=request('nombre');
    $nuevo->descripcion=request('descripcion');
    $nuevo->pregunta=request('pregunta');
    $nuevo->respuesta=request('r1');
    $nuevo->ruta_img=$request->file('foto')->store('public');
    $nuevo->save();
    
    $ejercicios = Ejercicios::all();
    $temas = Temas::all();
    return view('Usuarios.administrador.ejercicios' ,["datos"=>$ejercicios , "temas"=>$temas]);
    
  } 
  
  public function Ejercicios()
  {
    $ejercicios = Ejercicios::all();
    $temas = Temas::all();
    //$ejercicios="h0la";
    return view('Usuarios.administrador.ejercicios' ,["datos"=>$ejercicios , "temas"=>$temas]);
  } 
   
  public function EjercicioInt($id)
  {
    $ejercicio = Ejercicios::find($id);
    //dd($ejercicio);
    return view('Usuarios.alumno.Modulos.GramaticaInt' ,["datos"=>$ejercicio]);
  } 
  
  
  
}
