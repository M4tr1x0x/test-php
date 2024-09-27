<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiController extends Controller
{
    public function mostrarMensaje()
    {
        return "Este es el endpoint manejado por MiController";
    }
}
