<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Proyecto;

class LoginController extends Controller
{
  
  public function __construct(){
    $this->middleware('guest',['only'=>'showLoginForm']);
  }
  public function showLoginForm(){    
    return view('/buscarProyectos');
  }
  public function login(){
    $credenciales=$this->validate(request(),[
      'email'=>'email|required|string',
      'password'=>'required|string'
    ]);
    //return $credenciales;
    if(Auth::attempt($credenciales)){ // AQUI SE REDIRECCIONA AL INICIAR SESIÓN
      $proyectos = Proyecto::all();
      return view('pages.comoFreelance.buscarProyectos', compact('proyectos'));
    }
    return back()
      ->withErrors(['email'=>trans('auth.failed')])
      ->withInput(request(['email']));
    //return view('pages.comoFreelance.buscarProyectos');
  }
  
  public function logout(){
    Auth::logout();
    return redirect('/inicio');
  }
}
