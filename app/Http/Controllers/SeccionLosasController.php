<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionLosasController extends Controller
{
    public function index() {
        return view('configs.seccion_losas.index');
    }
}
