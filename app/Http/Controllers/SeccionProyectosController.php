<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionProyectosController extends Controller
{
    public function index() {
        return view('configs.seccion_proyectos.index');
    }
}
