<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducteController extends Controller
{
    public function index()
    {
        $productes = Producte::paginate(5);
        return view('productes.index', compact('productes'));
    }
/*
    public function create()
    {
        return view('productes.create');
    }
*/    
}
