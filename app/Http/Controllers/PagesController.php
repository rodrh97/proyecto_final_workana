<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{ 
    /* Funciones para retornar las vistas */
    
   
  // Como Freelance
    
    // Buscar proyectos
    public function buscarTrabajo(){
      return view('pages.comoFreelance.buscarProyectos');
    }
    
    public function perfilComoFreelance(){
      return view('pages.comoFreelance.perfilFreelance');
    }
  
    public function notificaciones(){
      return view('pages.comoFreelance.notificaciones');
    }
  
    public function proyectosComoFreelance(){
      return view('pages.comoFreelance.proyectosComoFreelance');
    }
  
    public function proyectosConMisHabilidades(){
      return view('pages.comoFreelance.proyectosConMisHabilidades');
    }
  
    public function realizarPropuesta(){
      return view('pages.comoFreelance.realizarPropuesta');
    }
  
    public function mejorarPropuesta(){
      return view('pages.comoFreelance.mejorarPropuesta');
    }
  
  
  // Como cliente
    
    public function perfilComoCliente(){
      return view('pages.como_cliente.perfil_cliente');
    }
  
    public function crearProyecto(){
      return view('pages.como_cliente.crear_proyecto');
    }
  
    public function freelancersContratados(){
      return view('pages.como_cliente.freelancers_contratados');
    }
  
    public function proyectosComoCliente(){
      return view('pages.como_cliente.proyectos_como_cliente');
    }
  
    public function verPropuestas(){
      return view('pages.como_cliente.ver_propuestas');
    }
  
  
  // Configuración, menú, registro y editar perfil
  
    public function configuracion(){
      return view('pages.configuracion');
    }
    
    public function menu(){
      return view('layouts.layout_menu');
    }
  
    public function registro() {
      return view('pages.registro');
    }
    public function iniciarSesion() {
      return view('pages.login');
    }
  
    public function editarPerfil(){
      return view('pages.editarPerfil');
    }
    
}
