<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function Cocina(){
   		return view('cocina.cocina');
   }

   public function Administrador(){
   		return view('administrador.administrador');
   }
}
