<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_perfil extends Model
{
    protected $filable=[
        'id_usuario','id_perfil','estado_up'
    ];

    protected $table = 'usuario_perfil';
    public $timestamps = false; 
    protected  $primaryKey  = 'id_usuario , id_perfil';

 }
