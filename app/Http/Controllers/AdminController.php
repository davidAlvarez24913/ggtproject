<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin',['only'=>['index'] ]);
        
    }
    public function index()
    {
        return view('admin.home');
    }
    public function perfil(){
        
        return view('admin.configUser');
    }

}
