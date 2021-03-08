<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Users;

class UsuariosController extends Controller
{
    public function index(){
        return Users::all();
    }

    public function store(Request $request){
        return Users::create($request->all());
    }

    public function show(Users $usuario){
        return $usuario;
    }

}
