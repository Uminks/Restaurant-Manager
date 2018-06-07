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
}
