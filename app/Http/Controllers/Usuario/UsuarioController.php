<?php

namespace App\Http\Controllers\Usuario;

use App\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Usuario::all();
        return response()->json(['data'=>$data],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $reglas=[
             'id_usuario'=>'required|unique:usuario',
            'pass'=>'required|min:5|confirmed'
        ];

        $this->validate($request,$reglas);
        $campos = $request->all();
        // $campos['pass'] = bcrypt($request->pass);
       
        $usuario = Usuario::create($campos);
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
        $usuario = Usuario::findOrFail($id);
        return response()->json(['data'=>$usuario],200);
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
        $usuario = Usuario::findOrFail($id);

        $reglas=[
           'pass'=>'min:5|confirmed'
       ];

        $this->validate($request,$reglas);
        if($request->has('user_name')){
            $usuario->user_name=$request->user_name;
        }

        if($request->has('pass')){
            $usuario->pass=$request->pass;
        }

        if(!$usuario->isDirty()){
            return response()->json(['error'=>'Se debe ingresar al menos un valor diferente 
            para modificar', 'code'=>422],422);
        }

        $usuario ->save();
        return response()->json(['data'=>$usuario],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();
        return response()->json(['data'=>$usuario],200);
    }
}
