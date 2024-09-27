<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Devuelve la vista index.blade.php
    public function index()
    {
        return view('products.index');
    }

    // Devuelve la vista create.blade.php
    public function create()
    {
        return view('products.create');
    }

    // No se mostrará, pero lo mantenemos aquí
    public function edit($id)
    {
        return view('products.edit');
    }
}
