<?php

namespace App\Http\Controllers\Usuario_perfil;

use App\Usuario_perfil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Usuario_perfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Usuario_perfil::all();
        return response()->json(['data'=>$data],200);
    }

    
    public function store(Request $request)
    {
      
        $campos = $request->all();
        $usuario = Usuario_perfil::create($campos);
        
        return response()->json(['data'=>$usuario],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = Usuario_perfil::findOrFail($id);
        return response()->json(['data'=>$usuario],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario_perfil = Usuario_perfil::findOrFail($id);
 
             if($request->has('id_perfil')){
                 $usuario_perfil->id_perfil=$request->id_perfil;
             } 
     
             $usuario_perfil ->save();
             return response()->json(['data'=>$usuario_perfil],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
