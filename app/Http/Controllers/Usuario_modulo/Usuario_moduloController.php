<?php

namespace App\Http\Controllers\Usuario_modulo;

use App\Usuario_modulo;
use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class Usuario_moduloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = $request->all();
        $usuario = Usuario_modulo::create($campos);
        
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

        $usuario=DB::table('usuario_modulo as um')
        ->select('um.id_usuario','um.id_mod','um.estado_um')
        ->where('um.id_usuario','=',$id)
        ->get();

        // $usuario = Usuario_modulo::findOrFail($id);
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
        if($request->band==true){
            $usuario_modulo = Usuario_modulo::findOrFail($id);
            $usuario_modulo->delete();
        } 

        $campos = $request->all();
        $usuario_modulo = Usuario_modulo::create($campos);
        return response()->json(['data'=>$usuario_modulo],201);
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
