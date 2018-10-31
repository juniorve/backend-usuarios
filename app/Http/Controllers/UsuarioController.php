<?php

namespace App\Http\Controllers;
use App;
use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    public function saveUser(Request $req){
        $usuario = new Usuario();
        $usuario->id_usuario = $req->id_usuario;
        $usuario->user_name = $req->user_name;
        $usuario->pass = $req->pass;

        $usuario->save();
        return redirect('/newusuario');
    }

    public function getUsuarios(){
        $usuarios = App\Usuario::all();
        return view('usuario',compact('usuarios'));
    }
}
