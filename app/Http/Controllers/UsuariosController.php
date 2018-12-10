<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
  
class UsuariosController extends Controller
{
    public function registrarUsuario(){
      $usuario = new User();
      $usuario->name = request('nombre');
      $usuario->email  = request('correo');
      $usuario->password  = Hash::make(request('password'));
      $usuario->save();
      return redirect('/');
    }
  
    public function editarUsuario($id){
      $usuario = User::find($id);
      $usuario->descripcion_sobreMi= request('sobreMi');
      $usuario->descripcion_corta= request('descripcion');
      $usuario->save();
      return redirect('/perfilComoFreelance');
    }
    public function configurarUsuario($id){
      $usuario = User::find($id);
      $usuario->name=request('userName');
      $usuario->email=request('correo');
      $usuario->password=Hash::make(request('newPassword'));
      $usuario->save();
      return redirect('/perfilComoCliente');
    }
}
