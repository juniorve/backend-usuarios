<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
 
Route::resource('usuarios','Usuario\UsuarioController');
Route::resource('usuario_perfil','Usuario_perfil\Usuario_perfilController');
Route::resource('usuario_modulo','Usuario_modulo\Usuario_moduloController');
