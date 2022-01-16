<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PonderacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('gad',['only'=>['index'] ]);
        
    }
    public function index()
    {
        return view('gad.home');
    }
    public function validacion()
    {
        return view('gad.validacion');
    }
    public function ponderacion()
    {
        return view('gad.ponderacion');
    }
}
