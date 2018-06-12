<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;

class AdministradorController extends Controller
{
    public function index(){
    	return Menu::all();
    }

    public function crearTipo(Request $request){

    	$tipo = Menu::create($request->all());

    	return response()->json($tipo, 201);
    }

    public function eliminarTipo(Menu $tipo){

    	$tipo->delete();

    	return response()->json(null, 204);
    }

    public function indexPlatos($tipo){

        $platos = Menu::where('id', $tipo)->first();

        return response()->json($platos->platos);

    }

}
