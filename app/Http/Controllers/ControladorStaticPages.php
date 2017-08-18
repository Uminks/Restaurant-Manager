<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorStaticPages extends Controller
{
    public function Home(){
		return view('home.Home'); // Retorna Vista Home -> path -> resources/views/Home.blade.php
	}

	public function LaravelHome(){
		return view('welcome'); // Retorna Vista welcome -> path -> resources/views/welcome.blade.php
	}
}
