<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeccionPerlitaMineralController extends Controller
{
    public function index() {
        return view('configs.seccion_perlita_mineral.index');
    }
}
